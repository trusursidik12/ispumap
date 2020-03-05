<?php include_once "common.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>
<body>
	<style>
	body {
    padding: 0;
    margin: 0;
}
html, body, #mapid {
    height: 100%;
}

	</style>
	<nav class="navbar-light bg-light sticky-top">
		<form class="">
			<div class="d-flex">
				<div class="mr-auto p-1">
					<img width="60" src="icon/logo.jpeg">
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

	<div style="padding-bottom: 50px">
		<div class="card m-2">
			<div class="d-flex">
				<div class="p-2 text-center">
					<img src="image/kalimantan.jpg" width="100" height="100">
				</div>
				<div class="p-1">
					<div class="col">
						<b>Kebakaran Hutan Kalimantan</b><hr style="margin-top: 5px; margin-bottom: 5px">
					</div>
					<div class="col text-justify" style="font-size: 10px">
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ..</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card m-2">
			<div class="d-flex">
				<div class="p-2 text-center">
					<img src="image/kalimantan.jpg" width="100" height="100">
				</div>
				<div class="p-1">
					<div class="col">
						<b>Kebakaran Hutan Kalimantan</b><hr style="margin-top: 5px; margin-bottom: 5px">
					</div>
					<div class="col text-justify" style="font-size: 10px">
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ..</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card m-2">
			<div class="d-flex">
				<div class="p-2 text-center">
					<img src="image/kalimantan.jpg" width="100" height="100">
				</div>
				<div class="p-1">
					<div class="col">
						<b>Kebakaran Hutan Kalimantan</b><hr style="margin-top: 5px; margin-bottom: 5px">
					</div>
					<div class="col text-justify" style="font-size: 10px">
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ..</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card m-2">
			<div class="d-flex">
				<div class="p-2 text-center">
					<img src="image/kalimantan.jpg" width="100" height="100">
				</div>
				<div class="p-1">
					<div class="col">
						<b>Kebakaran Hutan Kalimantan</b><hr style="margin-top: 5px; margin-bottom: 5px">
					</div>
					<div class="col text-justify" style="font-size: 10px">
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ..</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card m-2">
			<div class="d-flex">
				<div class="p-2 text-center">
					<img src="image/kalimantan.jpg" width="100" height="100">
				</div>
				<div class="p-1">
					<div class="col">
						<b>Kebakaran Hutan Kalimantan</b><hr style="margin-top: 5px; margin-bottom: 5px">
					</div>
					<div class="col text-justify" style="font-size: 10px">
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ..</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card m-2">
			<div class="d-flex">
				<div class="p-2 text-center">
					<img src="image/kalimantan.jpg" width="100" height="100">
				</div>
				<div class="p-1">
					<div class="col">
						<b>Kebakaran Hutan Kalimantan</b><hr style="margin-top: 5px; margin-bottom: 5px">
					</div>
					<div class="col text-justify" style="font-size: 10px">
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ..</p>
					</div>
				</div>
			</div>
		</div>
		<div class="card m-2">
			<div class="d-flex">
				<div class="p-2 text-center">
					<img src="image/kalimantan.jpg" width="100" height="100">
				</div>
				<div class="p-1">
					<div class="col">
						<b>Kebakaran Hutan Kalimantan</b><hr style="margin-top: 5px; margin-bottom: 5px">
					</div>
					<div class="col text-justify" style="font-size: 10px">
						<p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ..</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer fixed-bottom">
        <div class="d-flex text-center bg-light">
            <div class="p-2 flex-fill p-3 border">
                <a href="# " class="text-dark"><i class="fas fa-globe"></i></a>
            </div>
            <div class="p-2 flex-fill p-3 border">
                <a href="#" class="text-dark"><i class="fas fa-heart"></i></a>
            </div>
            <div class="p-2 flex-fill p-3 border">
                <a href="#" class="text-dark"><i class="fas fa-user-circle"></i></a>
            </div>
            <div class="p-2 flex-fill p-3 border">
                <a href="#" class="text-primary"><i class="fas fa-newspaper"></i></a>
            </div>
            <div class="p-2 flex-fill p-3 border">
                <a href="#" class="text-dark"><i class="fas fa-sitemap"></i></a>
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
					initmap();
					function initmap() {
						// set up the map
						map = new L.Map('mapid', {
						attributionControl: false,
						zoomControl: false,
						});
						
						var osmUrl='https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
						//topomap
						//var osmUrl='https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png';
						var osmAttrib='Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors';
						var osm = new L.TileLayer(osmUrl, {minZoom: 3, attribution: osmAttrib});

						// start the map in South-East England
						map.setView(new L.LatLng(-0.7, 119),5);
						map.addLayer(osm);
						L.control.zoom({
						// position: 'bottomleft'
						}).addTo(map);
					}
				</script>
</html>