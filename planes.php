<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Planes</title>
	<link rel="stylesheet" href="css/estilos.css">


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
	<?php
	require('pages/custom/header.php');
	?>
	<section class="bg-dark ptb-md">
		<div class="container   text-center">
			<div class="row align-items-center">
				<div class="col">
					<h2 class="text-light">Planes</h2>
					<p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas eaque ipsam laudantium.
					</p>
				</div>
			</div>
		</div>
	</section>
	<div class="container ptb">
		<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
			<div class="col">
				<div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-header py-3">
						<h4 class="my-0 fw-normal">Básico</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">S/ 36<small class="text-muted fw-light">/mes</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li>10 users included</li>
							<li>2 GB of storage</li>
							<li>Email support</li>
							<li>Help center access</li>
						</ul>
						<button type="button" class="w-100 btn btn-lg btn-outline-dark">Contratar</button>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-header py-3">
						<h4 class="my-0 fw-normal">Premium</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">S/56<small class="text-muted fw-light">/mes</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li>20 users included</li>
							<li>10 GB of storage</li>
							<li>Priority email support</li>
							<li>Help center access</li>
						</ul>
						<button type="button" class="w-100 btn btn-lg btn-dark">Contratar</button>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card mb-4 rounded-3 shadow-sm border-dark">
					<div class="card-header py-3 text-white bg-dark border-dark">
						<h4 class="my-0 fw-normal">Enterprise</h4>
					</div>
					<div class="card-body">
						<h1 class="card-title pricing-card-title">S/86<small class="text-muted fw-light">/mes</small></h1>
						<ul class="list-unstyled mt-3 mb-4">
							<li>30 users included</li>
							<li>15 GB of storage</li>
							<li>Phone and email support</li>
							<li>Help center access</li>
						</ul>
						<button type="button" class="w-100 btn btn-lg btn-dark">Contratar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	require('pages/custom/footer.php');
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>