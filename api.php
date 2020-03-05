<?php
if (isset($_GET['f']))
header('Content-Type: application/json');
set_time_limit(500000);
$token = 'hakjsdlufn4huhfnjdh9asdj0asdkjf';
$result = call_user_func($_GET['f'], $_GET);
die(json_encode($result));

function mysqli (){
    $mysqli = new mysqli("localhost", "root", "root", "ispumap");
    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }

    return $mysqli;
}

function get_detail($param){
    $d = [];

    if (empty($param['location_id'])) die(json_encode($d));

    $q1 = "SELECT DATE(DATE) latest_date, ROUND(AVG(pm10)) as pm10, ROUND(AVG(so2)) as so2, ROUND(AVG(co)) as co, ROUND(AVG(o3)) as o3, ROUND(AVG(no2)) as no2 FROM transactions WHERE location_id = ".$param['location_id']." GROUP BY DATE(DATE) ORDER BY latest_date DESC LIMIT 2";

    $result1 = mysqli()->query($q1);
    $latest = [];
    while ($row = $result1->fetch_assoc()){
        $latest[] = $row;
    }
    //die(json_encode($latest));

    //if (empty($latest[1])) $latest[1] = $latest[0];

    foreach ($latest[0] as $column=>$content){
        if ($column != 'latest_date')
        $latest[0][$column.'_direction'] = (empty($latest[1]) || $latest[0][$column] > $latest[1][$column]) ? 'RISE' : (($latest[0][$column] == $latest[1][$column]) ? 'EQUAL' : 'FALL');
    }

    $d['latest'] = $latest;

    $q2 = "SELECT MONTH(DATE) latest_date, ROUND(AVG(pm10)) as pm10, ROUND(AVG(so2)) as so2, ROUND(AVG(co)) as co, ROUND(AVG(o3)) as o3, ROUND(AVG(no2)) as no2 FROM transactions WHERE location_id = ".$param['location_id']." GROUP BY MONTH(DATE) ORDER BY latest_date DESC";

    $result2 = mysqli()->query($q2);
    $monthly = [];
    $index = 0;
    while ($row = $result2->fetch_assoc()){
        $largest = 0;
        $largest_column = [];
        foreach ($row as $c=>$r){
            if ($c != 'latest_date'){
                if ($r > $largest){
                    $largest = $r;
                    $largest_column = [$c];
                }elseif($r == $largest){
                    $largest_column[] = $c;
                }
                $row[$c.'_direction'] = 'RISE';

                if ($index > 0){
                    $monthly[$index-1][$c.'_direction'] = ($monthly[$index-1][$c] == $r) ? 'EQUAL' :  (($monthly[$index-1][$c] > $r) ? 'RISE' : 'FALL');
                }
            }
        }
        $index++;
        $row['largest'] = $largest;
        $row['critical'] = implode(',', $largest_column);
        $monthly[] = $row;
    }

    //array_pop($monthly);

    $d['monthly'] = $monthly;

    $location = get_locations(['location_id'=>$param['location_id']]);

    if (!empty($location)){
        $location = $location[0];
    }
    $d['location'] = $location;

    return $d;
    //die(json_encode($d));
}

function get_locations($param){
    $where = '';
    if (isset($param['location_id'])){
        $where = "WHERE locations.id = ".$param['location_id'];
    }
    $q = "SELECT locations.*, transactions.id transaction_id, transactions.date, transactions.pm10, transactions.so2, transactions.co, transactions.o3, transactions.no2, transactions.critical, GREATEST(transactions.pm10, transactions.so2, transactions.co, transactions.o3, transactions.no2) largest
    FROM locations JOIN (SELECT location_id, MAX(date) maxdate FROM transactions GROUP BY location_id) maxtrans ON locations.id = maxtrans.location_id
    JOIN transactions ON locations.id = transactions.location_id AND transactions.date = maxtrans.maxdate ".$where." ORDER BY largest";
    // print_r($q);
    $result = mysqli()->query($q);

    $d = [];
    while ($row = $result->fetch_object()){
        $d[] = $row;
    }
    return $d;
    //die(json_encode($d));
}

function get_top_city ($param){
    /*
    $where = '';
    if (isset($param['location_id'])){
        $where = "WHERE locations.id = ".$param['location_id'];
    }
    */
    $q = "SELECT * FROM
    (SELECT locations.city, locations.province, max(trans.great) largest
    FROM locations
    LEFT JOIN (SELECT location_id, MAX(DATE(DATE)) maxdate FROM transactions GROUP BY location_id) maxtrans ON locations.id = maxtrans.location_id
    left JOIN (SELECT transactions.*, GREATEST(transactions.pm10, transactions.so2, transactions.co, transactions.o3, transactions.no2) great FROM transactions ) trans ON locations.id = trans.location_id AND DATE(trans.DATE) = maxtrans.maxdate
    GROUP BY locations.province, locations.city
    ORDER BY largest, city, province) trans_alias
    ORDER BY trans_alias.largest IS NULL, trans_alias.largest";

    $result = mysqli()->query($q);

    $d = [];
    while ($row = $result->fetch_object()){
        $d[] = $row;
    }
    return $d;
}

function add_location($param){
    $param = $_POST;
    global $token;
    $column = [];
    $values = [];
    $d = [];

    if (empty($param['t']) || $param['t'] != $token){
        die(json_encode($d));
    }

    $q = "INSERT INTO locations ";

    if (empty($param['name'])) die(json_encode($d));

    if (isset($param['name'])){
        $column[] = '`name`';
        $values[] = "'".$param['name']."'";
    }
    if (isset($param['lat'])){
        $column[] = '`lat`';
        $values[] = "'".$param['lat']."'";
    }
    if (isset($param['long'])){
        $column[] = '`long`';
        $values[] = "'".$param['long']."'";
    }
    if (isset($param['city'])){
        $column[] = '`city`';
        $values[] = "'".$param['city']."'";
    }
    if (isset($param['province'])){
        $column[] = '`province`';
        $values[] = "'".$param['province']."'";
    }

    $q .= "(".implode(",", $column).")";
    $q .= " VALUES (".implode(",", $values).")";

    $mysqli = mysqli();
    $result = $mysqli->query($q);

    if ($result){
        $last_id = mysqli_insert_id($mysqli);
        $q = "SELECT * FROM locations WHERE id='".$last_id."'";
        $result = $mysqli->query($q);
        if ($result) $result = $result->fetch_object();
    }

    die(json_encode($result));
}

function get_data($param){
    //global $token;
    $page = empty($param['page']) ? 1 : (int) $param['page'];
    $data_per_page = 50;
    $start = ($page - 1) * $data_per_page;

    $where = '1 = 1';

    if (!empty($_GET['location_id'])){
        $where .= " AND location_id = '".(int)$_GET['location_id']."'";
    }

    $q = "SELECT * FROM transactions WHERE ".$where." LIMIT ".$start.", ".$data_per_page;

    $result = mysqli()->query($q);
    $d = [];
    while ($row = $result->fetch_object()){
        $d[] = $row;
    }
    return $d;
    //die(json_encode($d));
}

function replace_transactions($param){
    global $token;
    $param = $_POST;
    $column = [];
    $values = [];
    $d = [];
    $q = "REPLACE INTO transactions ";

    if (empty($param['t']) || $param['t'] != $token){
        $d['e'] = 'invalid token';
        die(json_encode($d));
    }

    if (empty($param['location_id'])){
        $d['e'] = 'empty location_id';
        die(json_encode($d));
    }else{
        $column[] = 'location_id';
        $values[] = $param['location_id'];
    }
    if (empty($param['date'])){
        $d['e'] = 'empty date';
        die(json_encode($d));
    }else{
        $column[] = 'date';
        $values[] = "'".$param['date']."'";
    }
    if (isset($param['pm10'])){
        $column[] = 'pm10';
        $values[] = (!empty($param['pm10']) || $param['pm10'] === '0') ? "'".$param['pm10']."'" : 'NULL';
    }
    if (isset($param['so2'])){
        $column[] = 'so2';
        //$values[] = empty($param['so2']) && $param['so2'] !== 0 ? 'NULL' : "'".$param['so2']."'";
        $values[] = (!empty($param['so2']) || $param['so2'] === '0') ? "'".$param['so2']."'" : 'NULL';
    }
    if (isset($param['co'])){
        $column[] = 'co';
        //$values[] = empty($param['co']) && $param['co'] !== 0 ? 'NULL' : "'".$param['co']."'";
        $values[] = (!empty($param['co']) || $param['co'] === '0') ? "'".$param['co']."'" : 'NULL';
    }
    if (isset($param['o3'])){
        $column[] = 'o3';
        //$values[] = empty($param['o3']) && $param['o3'] !== 0 ? 'NULL' : "'".$param['o3']."'";
        $values[] = (!empty($param['o3']) || $param['o3'] === '0') ? "'".$param['o3']."'" : 'NULL';
    }
    if (isset($param['no2'])){
        $column[] = 'no2';
        //$values[] = empty($param['no2']) && $param['no2'] !== 0 ? 'NULL' : "'".$param['no2']."'";
        $values[] = (!empty($param['no2']) || $param['no2'] === '0') ? "'".$param['no2']."'" : 'NULL';
    }
    if (isset($param['critical'])){
        $column[] = 'critical';
        $values[] = "'".$param['critical']."'";
    }

    $q .= "(".implode(",", $column).")";
    $q .= " VALUES (".implode(",", $values).")";

    $mysqli = mysqli();
    $result['q'] = $q;
    $result['s'] = $mysqli->query($q);

    if (!$result['s']) $result['e'] = $mysqli->error;
    return $result;
    //die(json_encode($result));
}
