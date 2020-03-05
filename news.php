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

	<div style="padding-bottom: 40px">
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
            <div onclick="location.href='index.php';" class="flex-fill p-2 border">
                <i class="fas fa-globe text-dark"></i>
            </div>
            <div onclick="location.href='detailkota.php';" class="flex-fill p-2 border">
                <i class="fas fa-heart text-dark"></i>
            </div>
            <div onclick="location.href='profile.php';" class="flex-fill p-2 border">
                <i class="fas fa-user-circle text-dark"></i>
            </div>
            <div onclick="location.href='news.php';" class="flex-fill p-2 border">
                <i class="fas fa-newspaper text-primary"></i>
            </div>
            <div onclick="location.href='decision.php';" class="flex-fill p-2 border">
                <i class="fas fa-sitemap text-dark"></i>
            </div>
        </div>
    </div>

</body>
</html>