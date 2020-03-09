<?php
$rank = array(
    array(
        'label_id' => 'baik',
        'label_en' => 'good',
        'min'   => null,
        'max'   => 50,
        'color_light' => '#4CD137',
        'color_dark' => '#44BD32',
        'color_font' => '#f5f6fa',
        'icon'  => 'ic_emote_bagus.png',
    ),
    array(
        'label_id' => 'sedang',
        'label_en' => 'moderate',
        'min'   => 51,
        'max'   => 100,
        'color_light' => '#00A8FF',
        'color_dark' => '#0097E6',
        'color_font' => '#f5f6fa',
        'icon'  => 'ic_emote_sedang.png',
    ),
    array(
        'label_id' => 'tidak sehat',
        'label_en' => 'unhealthy',
        'min'   => 101,
        'max'   => 199,
        'color_light' => '#FBC531',
        'color_dark' => '#E1B12C',
        'color_font' => '#f5f6fa',
        'icon'  => 'ic_emote_tidak_sehat.png',
    ),
    array(
        'label_id' => 'sangat tidak sehat',
        'label_en' => 'very unhealthy',
        'min'   => 200,
        'max'   => 299,
        'color_light' => '#E84118',
        'color_dark' => '#C23616',
        'color_font' => '#f5f6fa',
        'icon'  => 'ic_emote_tidak.png',
    ),
    array(
        'label_id' => 'berbahaya',
        'label_en' => 'dangerous',
        'min'   => 300,
        'max'   => null,
        'color_light' => '#000000',
        'color_dark' => '#353B48',
        'color_font' => '#f5f6fa',
        'icon'  => 'ic_emote_berbahaya.png',
    ),
);

$direction = array(
    array(
        'label' => 'EQUAL',
        'icon' => 'ic_datar.png',
    ),
    array(
        'label' => 'RISE',
        'icon' => 'ic_naik.png',
    ),
    array(
        'label' => 'FALL',
        'icon' => 'ic_turun.png',
    ),
);

$pencemar = [
    [
        'name' => 'pm10',
        'name_long' => 'Partikulat',
    ],
    [
        'name' => 'so2',
        'name_long' => 'Sulfur Dioksida',
    ],
    [
        'name' => 'co',
        'name_long' => 'Carbon Monoksida',
    ],
    [
        'name' => 'o3',
        'name_long' => 'Ozon',
    ],
    [
        'name' => 'no2',
        'name_long' => 'Nitrogen Dioksida',
    ],
];

$bulan = [
    1 => "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

	<meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
	<style>
		html, body {
		  height: 100%;
		}

		.full-height {
		  height: 50%;
		}
		
		.leaflet-pane .leaflet-tooltip {
        background: transparent;
        border: 0;
        box-shadow: none;
        color: white;
		}
	</style>
</head>
<body>
	<nav class="navbar-light bg-light sticky-top">
		<form class="">
			<div class="d-flex">
				<div class="mr-auto p-1" style="margin-left: 20px;">
					<img width="40" src="icon/icon.png">
				</div>
				<div class="p-1">
					<input class="form-control" type="search" placeholder="Search" aria-label="Search">
				</div>
				<div class="p-1">
					<button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
				</div>
			</div>
		</form>
	</nav>
	<div style="margin-bottom: -200px;">

		<div class="m-2">
			<div class="d-flex" >
				<div class="col-sm-6 text-center">
					<div style="margin-top: 25px; margin-bottom: 20px;">
						<h6>Lokasi Saya</h6>
						<i class="fas fa-map-marker-alt fa-2x"></i>
						<p style="font-size: 15px;">Kota Tangerang</p>
					</div>
				</div>
				<div class="col-sm-6 bg-danger" style="background-image: url('image/yellow.jpg');">
					<div>
						<img style="margin-bottom: -180px; margin-left: -40px;" src="image/avatar.png" width="130">
					</div>
				</div>
			</div>
			<div class="p-2" style="margin-top: 50px;">
				<div class="d-flex text-center">
					<div class="col-sm">
						<img src="assets/cloud.png">
						<b>25°</b>
					</div>
					<div class="col-sm">
						<img src="assets/humidity2.png">
						<b>55%</b>
					</div>
					<div class="col-sm">
						<img src="assets/wind.png">
						<b style="font-size: 12px">250</b><b style="font-size: 9px;">km/h</b>
					</div>
					<div class="col-sm">
						<img src="assets/mask2.png">
						<b>33</b>
					</div>
					<div class="col-sm">
						<img src="assets/pm25.png">
						<b>9.1</b>
					</div>
				</div>
				<div style="margin-top: 20px;">
					<div class="d-flex">
						<div class="col-sm-8">&nbsp;</div>
						<div class="col-sm-2">
							Status
						</div>
						<div class="col-sm-2 bg-success text-center">
							BAIK
						</div>
					</div>
				</div>
				<div style="margin-top: 20px; padding-bottom: 200px;">
					
				</div>
			</div>

		</div>
	</div>

	<div class="card m-2 full-height naf" id="mapid">&nbsp;</div>

	<div style="padding-top: 30px;"></div>

	<div class="footer fixed-bottom">
        <div class="d-flex text-center bg-light">
            <div onclick="location.href='index.php';" class="flex-fill p-2 border">
                <i class="fas fa-globe fa-lg text-dark"></i>
            </div>
            <div onclick="location.href='detailkota.php';" class="flex-fill p-2 border">
                <i class="fas fa-heart fa-lg text-dark"></i>
            </div>
            <div onclick="location.href='profile.php';" class="flex-fill p-2 border">
                <i class="fas fa-user-circle fa-lg text-primary"></i>
            </div>
            <div onclick="location.href='news.php';" class="flex-fill p-2 border">
                <i class="fas fa-newspaper fa-lg text-dark"></i>
            </div>
            <div onclick="location.href='decision.php';" class="flex-fill p-2 border">
                <i class="fas fa-sitemap fa-lg text-dark"></i>
            </div>
        </div>
    </div>
</body>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="typeahead.js"></script>
	<script>
	var map;
    var rank = <?php echo json_encode($rank);?>;
    var direction = <?php echo json_encode($direction);?>;
    var pencemar = <?php echo json_encode($pencemar);?>;
    var bulan = <?php echo json_encode($bulan);?>;
    var location_list = [];
    var markers = [];


    initmap();
    get_locations();
    get_top_city();
    top_rank_selector();
    //$('.carousel').carousel();

    function show_detail_marker_override(e){
        return show_detail(e.target);
    }

    function show_detail(e){
        map.setView(e.getLatLng());

        var sidebar_container = $('#sidebar-container');
        var sidebar = $('#sidebar');
        var options = e.options;
        sidebar_container.removeClass('close').addClass('open');
        sidebar.show();

        get_detail(options.id);
    }

    function get_detail(location_id){
        var request = $.ajax({
            url: "http://103.247.11.149/server_side/api/ispumap.php",
            data: {f: "get_detail", location_id: location_id},
            datatype: 'json'
        });

        request.done(function(resp){
			console.log(resp);
            var sidebar = $('#sidebar');

            var location = resp.location;
            location.rank = get_rank(location.largest);

            // row-1
            var row_1 = sidebar.find('.row-1');
            var location_string = location.province +", "+ location.city;
            if (location.city.toLowerCase() !== location.name.toLowerCase()) location_string += ", "+  location.name;
            row_1.find('h6').html( location_string );
            row_1.find('h7').html(moment(location.date).format("H:m, MMM D YYYY"));

            // row-2
            var row_2 = sidebar.find('.row-2')
            row_2.find('.bg-color-dark').css('background-color', location.rank.color_dark);
            row_2.find('.bg-color-light').css('background-color', location.rank.color_light);
            row_2.find('.emoji img').attr('src', 'assets/'+location.rank.icon);
            row_2.css('color', location.rank.color_font);
            row_2.find('h3').html(location.rank.label_id);
            row_2.find('h2').html(location.largest);
            row_2.find('h7').html(location.critical);

            // row-3
            var row_3 = sidebar.find('.row-3');
            row_3.find('h7').html(location.critical);

            // row-4
            var row_4 = sidebar.find('.row-4');
            var html = '';
            var html_5 = '';
            var items = ['pm10', 'so2', 'co', 'o3', 'no2'];

            var template = '<div class="col"><img src="assets/##icon##"><h5 class="circular ##class##" style="border-color: ##color##" aria-target-id="daily-latest-##item##" aria-target-class="daily-latest">##value##</h5><h7>##item##</h7></div>';
            var template_5 = '<div class="col daily-latest" id="daily-latest-{{item_name}}"><h6>Konsentrasi {{item_name}}</h6><h7>{{item_name_long}}</h7><div class="row"><div class="col-8"><h7>{{latest_date}}</h7><div class="progress"><div class="progress-bar" role="progressbar" style="width: {{latest_percentage}}%; background-color: {{latest_background}}" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="direction"><img src="assets/{{latest_icon}}"> {{latest_value}}</div></div><div class="row progress-before"><div class="col-8"><h7>{{before_date}}</h7><div class="progress"><div class="progress-bar" role="progressbar" style="width: {{before_percentage}}; background-color: {{before_background}}" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="direction">{{before_value}}</div></div></div>';
            items.forEach(function(item, index){
                var value = resp.latest[0][item];
                var item_data = get_pencemar(item);
                var value_before = (resp.latest[1] === undefined)? 0 : resp.latest[1][item];
                var date_before = (resp.latest[1] === undefined)? '-' : moment(resp.latest[1].latest_date).format('MMM D YYYY');
                var recent = get_rank(value);
                var before = get_rank(value_before);
                var this_direction = get_direction(resp.latest[0][item+'_direction']);
                var new_html = template;
                var new_html_5 = template_5;

                if (index == 0){
                    new_html = new_html.replace('##class##', 'active');
                }else{
                    new_html = new_html.replace('##class##', '');
                }

                new_html = new_html.replace('##icon##', this_direction.icon);
                new_html = new_html.replace('##color##', recent.color_dark);
                new_html = new_html.replace('##value##', value);
                new_html = new_html.replace('##item##', item.toUpperCase());
                new_html = new_html.replace('##item##', item.toUpperCase());

                new_html_5 = new_html_5.replace('{{id}}', item);
                new_html_5 = new_html_5.replace('{{item_name}}', item.toUpperCase());
                new_html_5 = new_html_5.replace('{{item_name}}', item.toUpperCase());
                new_html_5 = new_html_5.replace('{{item_name_long}}', item_data.name_long);
                new_html_5 = new_html_5.replace('{{latest_date}}', moment(resp.latest[0].latest_date).format('MMM D YYYY'));
                new_html_5 = new_html_5.replace('{{latest_percentage}}', (value/5));
                new_html_5 = new_html_5.replace('{{latest_background}}', recent.color_dark);
                new_html_5 = new_html_5.replace('{{latest_icon}}', this_direction.icon);
                new_html_5 = new_html_5.replace('{{latest_value}}', value);

                new_html_5 = new_html_5.replace('{{before_date}}', date_before);
                new_html_5 = new_html_5.replace('{{before_percentage}}', (value_before/5));
                new_html_5 = new_html_5.replace('{{before_background}}', before.color_dark);
                new_html_5 = new_html_5.replace('{{before_value}}', value_before);

                html += new_html;
                html_5 += new_html_5;
            });

            row_4.html(html);

            var row_5 = sidebar.find('.row-5');
            row_5.html(html_5);
            konsentrasi_selector();

            $('.row-4 .circular').click(function(e){
                $('.row-4 .circular').removeClass('active').css('background-color', 'white');
                $(this).addClass('active');
                konsentrasi_selector();
            });

            var template_page = '<div class="carousel-item {{is_active}}"> <div class="row"> {{caro_item}} </div> </div>';
            var template_item = '<div class="col-4 caro-col"> <div class="row"> <div class="col caro-card" style="background-color: {{item_color}}"> <h7 style="background-color:{{item_color_light}};">{{bulan_name}}</h7> <img src="assets/{{item_icon}}"> <h6 style="background-color:{{item_color_light}};">{{item_name}}</h6> </div> </div> <div class="row"> <div class="col caro-graph">{{caro_graph}} </div> </div> </div>';
            var template_graph = '<div class="row"> <div class="col"> <h7>{{item_name}}</h7> <img src="assets/{{item_direction}}"> <h6>{{item_value}}</h6> </div> </div>';

            var monthly = resp.monthly;
            var i_page_item = 0;
            var n_page_item = 3;
            var n_item = monthly.length - 1;
            var i_page = 0;
            var html_carousel = '';

            var html_page = '', html_item = '', html_graph = '', temp_page = '', temp_graph = '';

            $.each(monthly, function(i, j){
                i_page_item++;
                temp_graph = '';

                items.forEach(function(item, index){
                    var item_direction = get_direction(j[item+'_direction']);

                    html_graph = template_graph;
                    html_graph = html_graph.replace('{{item_name}}', item.toUpperCase());
                    html_graph = html_graph.replace('{{item_direction}}', item_direction.icon);
                    html_graph = html_graph.replace('{{item_value}}', j[item]);

                    temp_graph += html_graph;
                });

                var largest_rank = get_rank(j.largest);

                html_item = template_item;
                html_item = html_item.replace('{{item_color}}', largest_rank.color_dark);
                html_item = html_item.replace('{{item_color_light}}', largest_rank.color_light);
                html_item = html_item.replace('{{item_color_light}}', largest_rank.color_light);
                html_item = html_item.replace('{{bulan_name}}', bulan[j.latest_date]);
                html_item = html_item.replace('{{item_icon}}', largest_rank.icon);
                html_item = html_item.replace('{{item_name}}', j.critical.toUpperCase());
                html_item = html_item.replace('{{caro_graph}}', temp_graph);

                temp_page += html_item;

                if (i_page_item >= n_page_item || i == n_item){
                    var is_active = (i_page == 0) ? 'active' : '';
                    html_page = template_page.replace('{{is_active}}', is_active);
                    html_page = html_page.replace('{{caro_item}}', temp_page);
                    html_carousel += html_page;
                    temp_page = '';
                    i_page_item = 0;
                    i_page++;
                }
            });

            $("#carousel-bulanan .carousel-inner").html(html_carousel);
            //$('.carousel').carousel();
        });
    }

    function top_rank_selector() {
        var active = $('.top-rank-selector.active');
        var target_id = active.attr('aria-target-id');
        var target_class = active.attr('aria-target-class');
        $('.'+target_class).hide();
        $('#'+target_id).show();
    }

    function konsentrasi_selector(){
        var active = $('.row-4 .circular.active');
        var color = active.css('border-color');
        active.css('background-color', color);
        var target_id = active.attr('aria-target-id');
        var target_class = active.attr('aria-target-class');
        $('.'+target_class).hide();
        $('#'+target_id).show();
    }

    var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];
            matches_options = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
                if (
                    substrRegex.test(str.options.name) ||
                    substrRegex.test(str.options.city) ||
                    substrRegex.test(str.options.province) ||
                    substrRegex.test(str.options.name+', '+str.options.city+', '+str.options.province) ||
                    substrRegex.test(str.options.name+', '+str.options.city) ||
                    substrRegex.test(str.options.city+', '+str.options.province)
                ) {
                    matches.push(str.options);
                    //matches_options.push(str.options);
                }
            });
            //console.log(matches);
            cb(matches);
        };
    };

    function get_top_city() {
        var string_table = '';
        var terbersih = '';
        var terkotor = '';
        var rank_selected;
        var largest_label;
        var length;
        var request = $.ajax({
            url: "http://103.247.11.149/server_side/api/ispumap.php",
            data: {f: "get_top_city"},
            datatype: 'json'
        });

        request.done(function(resp){

            length = resp.length;

            $.each(resp, function(i, j){
                rank_selected = get_rank(j.largest);
                largest_label = j.largest;
                if (j.largest === null) largest_label = 'no system';
                string_table = '<td>'+j.city+'</td><td><span class="badge" style="background-color: '+rank_selected.color_dark+';">'+largest_label+'</span></td></tr>'
                terbersih += '<tr><td>'+(i+1)+'</td>'+string_table;
                terkotor = '<tr><td>'+(length-i)+'</td>'+string_table+terkotor;
            });

            var header = '<tr><th></th><th>Kota</th><th>INA ISPU</th></tr>';
            $('#top-rank-terbersih .content').html(header+terbersih);
            $('#top-rank-terkotor .content').html(header+terkotor);
        });
    }

    function get_locations() {
        var request = $.ajax({
            url: "http://103.247.11.149/server_side/api/ispumap.php",
            data: {f: "get_locations"},
            datatype: 'json'
        });

        request.done(function(resp) {
            location_list = resp;
            var terbersih = '';
            var terkotor = '';
            var length = resp.length;
            var city_name = [];
            var rank_selected;
			
            var greenIcon = L.icon({
            iconUrl: 'image/flag.png',
            // shadowUrl: 'leaf-shadow.png',

            // iconSize:     [38, 95], // size of the icon
            // shadowSize:   [50, 64], // size of the shadow
            // iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            // shadowAnchor: [4, 62],  // the same for the shadow
            // popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor

            iconSize:     [24, 44], // size of the icon
            // shadowSize:   [50, 64], // size of the shadow
            iconAnchor:   [13, 40], // point of the icon which will correspond to marker's location
            // shadowAnchor: [4, 62],  // the same for the shadow
            // popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            $.each(resp, function(i, j){
                rank_selected = get_rank(j.largest);
				
                var circle = L.circleMarker([j.lat, j.long], {
                    color: rank_selected.color_dark,
                    fillColor: rank_selected.color_dark,
                    fillOpacity: 1,
                    radius: 14,
                })
                .bindTooltip(j.largest, {
                    permanent: true,
                    direction: 'center',
                    className: 'leaflet-tooltip'
                })
                .addTo(map).on('click', show_detail_marker_override);

                var circle2 = L.marker([j.lat, j.long],{
                    icon: greenIcon,
                })

                .bindTooltip(j.largest, {
                    permanent: true,
                    sticky: true,
                    direction: 'center',
                    className: 'leaflet-tooltip'
                })
                .addTo(map).on('click', show_detail_marker_override);
				
				if(j.geojson != null){
					// console.log("indonesia-"+j.province.replace(" ","").toLowerCase());
					var arr_geojson = JSON.parse(j.geojson);
					var geojson_coordinates = {
					   "type":"FeatureCollection",
					   "features":[
						  {
							 "type":"Feature",
							 "geometry":{
								"type":"MultiPolygon",
								"coordinates":arr_geojson
							 },
							 "properties": {
								"stroke": "#555555",
								"stroke-width": 2,
								"stroke-opacity": 1,
								"fill": "#555555",
								"fill-opacity": 0.5,
								"cartodb_id": (j.id * 1),
								"country": "Indonesia",
								"id_1": (j.id * 1),
								"slug": "indonesia-"+j.province.replace(" ","").toLowerCase(),
								"state": j.province
							  }
						  },
						]
					};
					
					L.geoJSON(geojson_coordinates, {
						style : function(feature){
							return {
								
								color : get_rank(j.largest).color_dark,
								fillColor : get_rank(j.largest).color_dark,
								fillOpacity : 0.3,
							}
						}
					}).addTo(map); 
				}
				
                city_name.push(j.name);

                j.rank = rank_selected;
                circle2.options = j;
                circle.options = j;

                markers.push(circle2);
                markers.push(circle);
            })

            var searchbox = $("#search-box").typeahead({
                hint: true,
                highlight: true,
                minLength: 1,
            }, {
                name: 'hahaha',
                source: substringMatcher(markers),
                display: function(item){
                    return item.name+', '+item.city+', '+item.province;
                },
                templates: {
                    suggestion: function(item){
                        return '<div>'+item.name+', '+item.city+', '+item.province+'</div>';
                    }
                }
            });

            searchbox.on('typeahead:selected', function(evt, item) {
                $(markers).each(function(index, marker){
                    if (marker.options.id === item.id){
                        show_detail(marker);
                        return true;
                    }
                });
            })


            searchbox.on('keyup', function(e){
                if (e.which == 13){
                    var siblings = $(this).siblings();
                    siblings.find(".tt-suggestion:first-child", this).trigger('click');
                }
            });
        })
    }

    function get_rank(value) {

        if (value === null || value === undefined){
            return {'label_id' : 'berbahaya',
            'label_en' : 'dangerous',
            'min'   : null,
            'max'   : null,
            'color_light' : '#000000',
            'color_dark' : 'transparent',
            'color_font' : '#f5f6fa',
            'icon'  : 'ic_emote_berbahaya.png'
            };
        }

        value = parseInt(value);
        var to_return;

        $.each(rank, function(i, j){
            if ((j.min <= value && j.max === null) || (j.min === null && value <= j.max) || (j.min <= value && value <= j.max)) {
                to_return = j;
                return false;
            }
        });

        return to_return;
    }

    function get_direction(value) {
        var to_return;
        $.each(direction, function(i, j){
            if (j.label === value){
                to_return = j;
                return false;
            }
        });

        return to_return;
    }

    function get_pencemar(value) {
        var to_return;
        $.each(pencemar, function(i, j){
            if (j.name === value){
                to_return = j;
                return false;
            }
        });

        return to_return;
    }
		function initmap() {
			// set up the map
			map = new L.Map('mapid', {
			attributionControl: false,
			zoomControl: false,
			});
			
			var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
			//topomap
			//var osmUrl='https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png';
			var osmAttrib='Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors';
			var osm = new L.TileLayer(osmUrl, {minZoom: 3, attribution: osmAttrib});

			// start the map in South-East England
			map.setView(new L.LatLng(-0.7, 119),5);
			map.locate({setView: true, maxZoom: 14});
			map.addLayer(osm);
			L.control.zoom({
			// position: 'bottomleft'
			}).addTo(map);
		}
		
		function onLocationFound(e) {
			var radius = e.accuracy;

			L.marker(e.latlng).addTo(map)
				.bindPopup("Lokasi anda BAIK").openPopup();

			L.circle(e.latlng, radius).addTo(map);
		}

		map.on('locationfound', onLocationFound);
		
		function onLocationError(e) {
			alert(e.message);
		}

		map.on('locationerror', onLocationError);
	</script>

</html>