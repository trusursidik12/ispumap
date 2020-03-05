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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
	<div class="container mt-3" style="padding-bottom:100px;">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs justify-content-center">
		  <li class="nav-item">
			<a class="nav-link active" href="#today">Data Hari ini</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#prediction">Prediksi Besok Hari</a>
		  </li>
		</ul>
		<!--div class="d-flex text-center">
			<div class="p-2 flex-fill">
				<button type="button" class="btn btn-light active">Active Primary</button>
			</div>
			<div class="p-2 flex-fill">
				<button type="button" class="btn btn-light">Active Primary</button>
			</div>
		<--/div>

		<!-- Tab panes -->
		<div class="tab-content">
			<div id="today" class="container tab-pane active"><br>
				<div class="card rounded-500">
					<div class="card-header" style="background-color:#C23616;">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight">DKI Jakarta</div>
							<div class="ml-auto p-2 bd-highlight">30°</div>
						</div>
					</div>
					<div class="d-flex text-center" style="background-color:#E84118;">
						<div class="p-2 flex-fill">
							<img width="30" src="assets/temparature.png">
							<br>
							25°
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/humidity.png">
							<br>
							55%
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/wind_direction.png">
							<br>
							12 Km/h
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/mask.png">
							<br>
							26
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/humidity.png">
							<br>
							5,1
						</div>
					</div>
					<div class="card-header" style="font-size:10px;background-color:#C23616;">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight">Status : BAHAYA | Rekomendasi : Tidak Layak Tinggal</div>
						</div>
					</div>
				</div>
				<br>
				<div class="card rounded-500">
					<div class="card-header" style="background-color:#44BD32;">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight">Bekasi</div>
							<div class="ml-auto p-2 bd-highlight">27°</div>
						</div>
					</div>
					<div class="d-flex text-center" style="background-color:#4CD137;">
						<div class="p-2 flex-fill">
							<img width="30" src="assets/temparature.png">
							<br>
							25°
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/humidity.png">
							<br>
							55%
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/wind_direction.png">
							<br>
							12 Km/h
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/mask.png">
							<br>
							26
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/humidity.png">
							<br>
							5,1
						</div>
					</div>
					<div class="card-header" style="font-size:10px; background-color:#44BD32;">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight">Status : Kurang Baik | Rekomendasi : Gunakan Masker</div>
						</div>
					</div>
				</div>
			</div>
			<div id="prediction" class="container tab-pane fade"><br>
				<div class="card rounded-500">
					<div class="card-header" style="background-color:#C23616;">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight">DKI Jakarta</div>
							<div class="ml-auto p-2 bd-highlight">30°</div>
						</div>
					</div>
					<div class="d-flex text-center" style="background-color:#E84118;">
						<div class="p-2 flex-fill">
							<img width="30" src="assets/temparature.png">
							<br>
							25°
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/humidity.png">
							<br>
							55%
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/wind_direction.png">
							<br>
							12 Km/h
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/mask.png">
							<br>
							26
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/humidity.png">
							<br>
							5,1
						</div>
					</div>
					<div class="card-header" style="font-size:10px;background-color:#C23616;">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight">Status : BAHAYA | Rekomendasi : Tidak Layak Tinggal</div>
						</div>
					</div>
				</div>
				<br>
				<div class="card rounded-500">
					<div class="card-header" style="background-color:#44BD32;">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight">Bekasi</div>
							<div class="ml-auto p-2 bd-highlight">27°</div>
						</div>
					</div>
					<div class="d-flex text-center" style="background-color:#4CD137;">
						<div class="p-2 flex-fill">
							<img width="30" src="assets/temparature.png">
							<br>
							25°
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/humidity.png">
							<br>
							55%
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/wind_direction.png">
							<br>
							12 Km/h
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/mask.png">
							<br>
							26
						</div>
						<div class="p-2 flex-fill">
							<img width="30" src="assets/humidity.png">
							<br>
							5,1
						</div>
					</div>
					<div class="card-header" style="font-size:10px; background-color:#44BD32;">
						<div class="d-flex bd-highlight">
							<div class="p-2 bd-highlight">Status : Kurang Baik | Rekomendasi : Gunakan Masker</div>
						</div>
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
</html>
<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>