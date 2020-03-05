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
		// var map;
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