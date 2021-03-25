<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<html lang="fr">
			<link rel="preconnect" href="https://fonts.gstatic.com">
			<link href="https://fonts.googleapis.com/css2?family=Averia+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
			<link rel="stylesheet" href="style.css" />
			<title>Chicken World</title>
		</head>
		<body>
			<!--NavBar -->
			<?php include 'navbar.php';?>
			<!--NavBar -->
			</header>
			<section>
			<!--JumboTron -->
			<div class="container-fluid d-flex" style="border-radius: 15px; border: 5px solid rgb(213, 38, 38);">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<h1>Special event</h1>
						<p>
							Un évènement inédit dans le monde. Une journée merveilleuse à passer en famille.
						</p>
						<p>
							A partir de 10:00, un grand laché de poulet aura lieu à la ferme, ou chacun aurra l'ocasion d'attraper son prochain diner. L'ocasion de passé un moment tous ensemble, et d'aprendre à préparer sa sa volaille et par la suite cuisiner de succulents Nuggets
						</p>
					</div>
					<div id="renard" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<img src="images/renard.svg" alt="imagechasse">
					</div>
				</div>
			</div>
			<!--2 x panels -->
			<!--JumboTron -->
			<div class="container-fluid d-flex">
				<div class="row align-items-center d-flex">
					<div class="col-xs6 col-sm-6 col-md-6 col-lg-6">
						<div class="container-fluid d-flex"  style="margin-top: 40px";>
							<div class="row align-items-center" style="border-radius: 15px; border:8px solid white">
								<div class="col-xs6 col-sm-6 col-md-6 col-lg-6">
									<h1>Offre Buckets 2 frites GRATIS</h1>
									<p>
										Super Offre 2 sachets de frites offert à l'achat d'1 Buckets XXL
									</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="buckets">
									<img class="img-fluid"   src="images/Bucket.png" alt="promobucket">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="container-fluid d-flex"  style="margin-top: 40px;">
							<div class="row d-flex" style="border:8px solid white; border-radius: 15px;">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h1>Venez fêter votre anniversaire</h1>
									<p>
										Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ipsum porro perferendis, quidem dignissimos ratione placeat esse dolores nemo aspernatur nesciunt ullam? Error eum illo provident facere molestiae doloribus corporis?
									</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<img class="img-fluid" src="images/annif.png" alt="promobucket">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
				<!--2 x panels -->
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
			</body>
			<footer>
			<!--Footer-->
			<?php include 'footer.php';?>
			<!--Footer-->
	</html>
