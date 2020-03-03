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
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
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
        width: 100%;
    }
    body {
        margin: 0;
        padding: 0;
    }

    .leaflet-pane .leaflet-tooltip {
        background: transparent;
        border: 0;
        box-shadow: none;
        color: white;
    }
    .fix{
        margin-top: 70px;
        padding-top: 70px;
    }

    .leaflet-touch .leaflet-control-layers, .leaflet-touch .leaflet-bar {
        border: none;
    }

    .leaflet-control-zoom a {
        border-radius: 50% !important;
        margin-bottom: 10px;
    }

    .badge {
        padding: .5em 1em;
    }

    #sidebar-container {
        position: fixed;
        top: 20px;
        bottom: 0;
        z-index: 1004;
        padding: 0 15px;
        width: 300px;
        max-width: 100%;
    }

    #sidebar-container.open {
        left: 0;
    }
    #sidebar-container.close {
        right: 100%;
        opacity: 1;
    }

    #sidebar-container .content {
        z-index: 1;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow-y: auto;
        padding-left: 15px;
        padding-right: 15px;
    }

    #sidebar-container .content h4 {
        line-height: 25px;
        font-weight: 500;
        font-size: 1.3rem;
    }

    #sidebar-container .content h6 {
        margin-bottom: 0;
    }

    #sidebar-container .content h7 {
        font-size: .8rem;
    }

    #sidebar-container #sidebar-toggler {
        position: absolute;
        left: 100%;
        z-index: 0;
    }

    #sidebar-container #sidebar-toggler button{
        height: 48px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        background-color: white;
        color: black;
        border: 0;
        box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.3);
    }

    #sidebar-container.open #sidebar-toggler .fa-caret-right{
        display: none;
    }
    #sidebar-container.open #sidebar-toggler .fa-caret-left{
        display: block;
    }
    #sidebar-container.close #sidebar-toggler .fa-caret-right{
        display: block;
    }
    #sidebar-container.close #sidebar-toggler .fa-caret-left{
        display: none;
    }

    #sidebar-container .row {
        padding-top: 5px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eaeaea;
        background-color: white;
    }

    #sidebar-container .row:last-child {
        border-bottom: 0;
    }

    #sidebar {
        display: none;
    }

    #sidebar .row-2 {
        text-align: center;
        padding-top: 0;
        padding-bottom: 0;
    }

    #sidebar .row-2 div {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    #sidebar .row-2 .helper {
        display: inline-block;
        /*height: 100%;*/
        vertical-align: middle;
    }

    #sidebar .row-2 .emoji {
        vertical-align: middle;
        /*height: 100%;*/
    }

    #sidebar .row-2 h3 {
        text-transform: uppercase;
        font-size: 1.5rem;
        margin-top: 5px;
    }

    #sidebar .row-2 h2 {
        margin-bottom: 0;
    }

    #sidebar .row-4 .col{
        padding-left: 3px;
        padding-right: 3px;
        text-align: center;
    }
    #sidebar .row-4 .col:first-child{
        padding-left: 15px;
    }
    #sidebar .row-4 .col:last-child{
        padding-right: 15px;
    }
    #sidebar .row-4 .circular {
        margin: 3px;
        font-size: 1rem;
        border-radius: 50%;
        height: 43px;
        vertical-align: middle;
        line-height: 43px;
        border: 1px solid;
        cursor: pointer;
    }
    #sidebar .row-4 .circular.active {
        color: white;
    }

    #sidebar .row-5 .row {
        padding-top: 0;
        padding-bottom: 0;
        border-bottom: 0;
        position: relative;
    }
    #sidebar .row-5 .direction {
        position: absolute;
        bottom: 0;
        right: 0;
        padding-right: 15px;
    }

    #sidebar .row-6 .carousel-control {
        width: auto;
        text-shadow: 0px 0px 3px #272634;
        opacity: .4;
    }
    #sidebar .row-6 .carousel-control:hover .fa {
        text-shadow: 0px 0px 5px #272634;
    }#sidebar .row-6 .carousel-item>.row {
        margin-left: -3px;
        margin-right: -3px;
    }
    #sidebar .row-6 .caro-col {
        padding-left: 3px;
        padding-right: 3px;
        text-align: center;
    }
    #sidebar .row-6 .caro-col .row {
        margin-left: 0;
        margin-right: 0;
    }
    #sidebar .row-6 .caro-col .col {
        padding-left: 0;
        padding-right: 0;
    }
    #sidebar .row-6 .caro-card {
        color: white;
        background-color: rgb(255, 223, 88);
    }
    #sidebar .row-6 .caro-graph h7 {
        display: block;
    }

    #sidebar .row-6 .caro-card h7, #sidebar .row-6 .caro-card h6 {
        display: block;
    }
    #sidebar .row-6 .caro-card img {
        width: 100%;
        padding: 10px;
    }

    #badge-container {
        color: white;
        position: fixed;
        top: 20px;
        right: 0;
        z-index: 1003;
        text-transform: uppercase;
        padding: 0 15px;
        text-align: end;
    }

    #badge-container .badge {
        font-size: 60%;
        font-weight: 500;
    }

    #top-button {
        position: fixed;
        top: 20px;
        right: 0;
        z-index: 1003;
        background-color: #0f197a;
        color: white;
        border-radius: .25em;
        font-size: 1rem;
        font-weight: 500;
        padding: .3rem .75rem;
        margin-right: 10px;
        border: none;
        box-shadow: 0 0 3px rgba(0,0,0,0.5);
    }
    #top-button:hover {
        box-shadow: 0 0 5px rgba(0,0,0,0.7)
    }
    #top-button img {
        vertical-align: baseline;
        height: 1.5rem;
        padding-top: 2px;
    }


    #top-container {
        display: none;
        padding-top: 15px;
        position: fixed;
        margin-right: 15px;
        margin-left: 15px;
        top: 20px;
        right: 0;
        z-index: 1003;
        background-color: rgba(8, 14, 69, 0.6);
        color: white;
        bottom: 0;
    }

    #top-container .nav-link {
        border-radius: .25em;
        color: white;
        border: 1px solid white;
        font-size: .8rem;
        padding: .3rem .75rem;
        margin-right:.5rem;
    }

    #top-container .nav-link.active {
        color: #080E45;
        background-color: white;
    }

    #top-container .close {
        color: white;
        margin-bottom: 15px;
    }

    #top-rank-container {
        max-width: 355px;
        padding-bottom: 90px;
    }

    #top-rank-container table.content {
        width: 100%;
    }

    #top-rank-container table.content .badge {
        min-width: 60px;
    }

    #top-rank-container table.content tr>* {
        line-height: 2.3;
    }

    #top-rank-container table.content tr>td:last-child, #top-rank-container table.content tr>th:last-child{
        text-align: right;
    }

    #mapid { height: 100%; }

    .ui-autocomplete.ui-front, .twitter-typeahead {
        z-index: 2004;
        width: 100%;
    }

    .twitter-typeahead .tt-hint {
        color: #aeaeae;
    }

    .twitter-typeahead .tt-menu {
        background-color: white;
        width: 100%;
        margin-top: 5px;
        border-radius: 5px;
        box-shadow: rgba(0, 0, 0, 0.3) 0px 0px 3px;
    }

    .twitter-typeahead .tt-menu .tt-suggestion {
        cursor: pointer;
        padding: 5px 15px;
    }

    .twitter-typeahead .tt-menu .tt-suggestion.tt-cursor {
        background-color: #80bdff;
    }
    </style>
</head>
<body>
    <div class="close" id="sidebar-container" style="background-color: transparent;">
        <div id="sidebar-toggler"><button class="btn btn-primary" type="button" ><i class="fa fa-caret-right"></i><i class="fa fa-caret-left"></i></button></div>
        <div class="content" style="background-color: transparent;">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" aria-label="Cari kota atau lokasi anda" id="search-box" onclick="this.select();">
                </div>
            </div>
            <div class="row" id="sidebar" style="background-color: rgba(65, 204, 220, 0.66);">
                <div class="col">
                    <div class="row row-1" style="background-color: rgba(65, 204, 220, 0.66);">
                        <div class="col">
                            <h4>Indeks Standar Pencemaran Udara (ISPU)</h4>
                            <h6></h6>
                            <h7></h7>
                        </div>
                    </div>
                    <div class="row row-2">
                        <div class="col-4 emoji bg-color-dark">
                            <span class="helper"></span>
                            <img width="100%">
                        </div>
                        <div class="col bg-color-light">
                            <h3></h3>
                            <h2></h2>
                            <h7></h7>
                        </div>
                    </div>
                    <div class="row row-3" style="background-color: transparent;">
                        <div class="col">
                            <h6>Critical Component</h6>
                            <h7></h7>
                        </div>
                    </div>
                    <div class="row row-4" style="background-color: transparent;">
                    </div>
                    <div class="row row-5" style="background-color: transparent;">
                    </div>
                    <div class="row row-6" style="background-color: rgba(65, 204, 220, 0.66);">
                        <div class="col">
                            <h6>Tingkat Polusi Perbulan</h6>
                            <h7>Perkiraan tingkat polusi udara berdasarkan bulan</h7>
                            <div id="carousel-bulanan" class="carousel slide" data-ride="carousel" data-interval="false">
                                <div class="carousel-inner">
                                </div>
                                <a class="carousel-control carousel-control-prev" href="#carousel-bulanan" role="button" data-slide="prev">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control carousel-control-next" href="#carousel-bulanan" role="button" data-slide="next">
                                    <i class="fa fa-chevron-circle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" id="top-button" class="button-show" aria-show="top-container" aria-hide="top-button"  style="background-color: rgba(8, 14, 69, 0.6);">
        <img src="assets/ic_peringkat.png">
    </button>
    <div id="top-container" style="background-color: rgba(8, 14, 69, 0.6);">
        <div class="top-header col">
            <div class="row">
                <div class="col">
                    <button type="button" class="close button-show" aria-label="Close" aria-hide="top-container" aria-show="top-button">
                        <span aria-hidden="true" style="vertical-align: top; line-height: 0;">&times;</span>
                    </button>
                </div>
            </div>
            <nav class="nav">
                <a class="nav-link active top-rank-selector" href="#" aria-target-class="top-rank-content" aria-target-id="top-rank-terbersih">Paling Bersih</a>
                <a class="nav-link top-rank-selector" href="#" aria-target-class="top-rank-content" aria-target-id="top-rank-terkotor">Paling Kotor</a>
            </nav>
        </div>
        <div class="col" style="height: 100%; overflow-y: auto;">

            <div id="top-rank-container">
                <div class="top-rank-content" id="top-rank-terbersih">
                    <table class="content">
                    </table>
                </div>
                <div class="top-rank-content" id="top-rank-terkotor">
                    <table class="content">
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div id="mapid"></div>

    <div class="footer fixed-bottom">
        <div class="d-flex text-center">
            <div class="p-2 flex-fill bg-primary">
                <a href="# " class="text-white"><i class="fas fa-globe"></i></a>
            </div>
            <div class="p-2 flex-fill bg-success">
                <a href="#" class="text-white"><i class="fas fa-heart"></i></a>
            </div>
            <div class="p-2 flex-fill bg-danger">
                <a href="#" class="text-white"><i class="fas fa-user-circle"></i></a>
            </div>
            <div class="p-2 flex-fill bg-warning">
                <a href="#" class="text-white"><i class="fas fa-newspaper"></i></a>
            </div>
            <div class="p-2 flex-fill bg-info">
                <a href="#" class="text-white"><i class="fas fa-sitemap"></i></a>
            </div>
        </div>
    </div>

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

    $('.top-rank-selector').click(function(e){
        $('.top-rank-selector').removeClass('active');
        $(this).addClass('active');
        top_rank_selector();
    });

    $('.button-show').click(function(e){
        var show = $(this).attr('aria-show');
        var hide = $(this).attr('aria-hide');
        $('#'+hide).hide();
        $('#'+show).show();
    });

    $('#sidebar-toggler button').click(function(e){
        if ($('#sidebar-container').hasClass('close')) $("#search-box").focus();
        $('#sidebar-container').toggleClass('open').toggleClass('close');
    });

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

        /*
        // row-1
        var row_1 = sidebar.find('.row-1');
        row_1.find('h6').html(options.province +", "+ options.name);
        row_1.find('h7').html(moment(options.date).format("H:m, MMM D YYYY"));

        // row-2
        var row_2 = sidebar.find('.row-2')
        row_2.find('.bg-color-dark').css('background-color', options.rank.color_dark);
        row_2.find('.bg-color-light').css('background-color', options.rank.color_light);
        row_2.find('.emoji img').attr('src', 'assets/'+options.rank.icon);
        row_2.css('color', options.rank.color_font);
        row_2.find('h3').html(options.rank.label_id);
        row_2.find('h2').html(options.largest);
        row_2.find('h7').html(options.critical);

        // row-3
        var row_3 = sidebar.find('.row-3');
        row_3.find('h7').html(options.critical);
        */
        //e.target.options
        get_detail(options.id);
    }

    function get_detail(location_id){
        var request = $.ajax({
            url: "api.php",
            data: {f: "get_detail", location_id: location_id},
            datatype: 'json'
        });

        request.done(function(resp){
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
            url: "api.php",
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
            url: "api.php",
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

                city_name.push(j.name);

                j.rank = rank_selected;
                circle2.options = j;
                circle.options = j;

                markers.push(circle2);
                markers.push(circle);

                /*
                var string_table = '<td>'+j.name+'</td><td><span class="badge" style="background-color: '+rank_selected.color_dark+';">'+j.largest+'</span></td></tr>'
                terbersih += '<tr><td>'+(i+1)+'</td>'+string_table;
                terkotor = '<tr><td>'+(length-i)+'</td>'+string_table+terkotor;
                */
            })

            /*
            var header = '<tr><th></th><th>Kota</th><th>INA ISPU</th></tr>';
            $('#top-rank-terbersih .content').html(header+terbersih);
            $('#top-rank-terkotor .content').html(header+terkotor);
            */

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
                    /*empty: [
                        '<div class="empty-message">',
                        'unable to find any Best Picture winners that match the current query',
                        '</div>'
                    ].join('\n'),*/
                    suggestion: function(item){
                        return '<div>'+item.name+', '+item.city+', '+item.province+'</div>';
                    }
                }
            });

            searchbox.on('typeahead:selected', function(evt, item) {
                //show_detail(item);

                $(markers).each(function(index, marker){
                    if (marker.options.id === item.id){
                        show_detail(marker);
                        return true;
                    }
                });
            })


            searchbox.on('keyup', function(e){
                if (e.which == 13){
                    //test = searchbox.typeahead('getHint');
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

        // create the tile layer with correct attribution
        // source: https://leaflet-extras.github.io/leaflet-providers/preview/
        //osm
        var osmUrl='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        //topomap
        //var osmUrl='https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png';
        var osmAttrib='Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors';
        var osm = new L.TileLayer(osmUrl, {minZoom: 3, attribution: osmAttrib});

        // start the map in South-East England
        map.setView(new L.LatLng(-0.7, 119),5);
        map.addLayer(osm);
        L.control.zoom({
            position: 'bottomleft'
        }).addTo(map);
    }
    </script>
</body>
</html>
