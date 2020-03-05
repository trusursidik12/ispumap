<?php include_once "common.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Decision</title>

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

	<div style="padding-bottom: 40px">

		<div class="m-2" style="padding-top: 140px;">
			<div class="col text-center">
				<h5>Silakan login Untuk Menggunakan Fitur Ini ..</h5>
			</div>
			<br>
			<div class="col text-center">
				<a href="login.php"><u>Login</u></a>
			</div>
		</div>

	</div>

	<div class="footer fixed-bottom">
        <div class="d-flex text-center bg-light">
            <div onclick="location.href='index.php';" class="flex-fill p-2 border">
                <i class="fas fa-globe fa-lg text-dark"></i>
            </div>
            <div onclick="location.href='detailkota.php';" class="flex-fill p-2 border">
                <i class="fas fa-heart fa-lg text-dark"></i>
            </div>
            <div onclick="location.href='profile.php';" class="flex-fill p-2 border">
                <i class="fas fa-user-circle fa-lg text-dark"></i>
            </div>
            <div onclick="location.href='news.php';" class="flex-fill p-2 border">
                <i class="fas fa-newspaper fa-lg text-dark"></i>
            </div>
            <div onclick="location.href='decision.php';" class="flex-fill p-2 border">
                <i class="fas fa-sitemap fa-lg text-primary"></i>
            </div>
        </div>
    </div>

</body>
</html>