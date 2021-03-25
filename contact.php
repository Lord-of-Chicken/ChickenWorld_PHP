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
		<?php include 'navbar.php';?>
			<!--Formlaire -->
			<section>
			<div class="container contact">
				<div class="row">
					<div class="col-md-3">
						<div class="contact-info">
							<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
							<h2>Contactez nous</h2>
							<h4>Nous serions ravis de vous entendre!</h4>
						</div>
					</div>
					<div class="col-md-9">
						<div class="contact-form">
							<div class="form-group">
								<label class="control-label col-sm-2" for="fname"></label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="fname" placeholder="Nom" name="fname">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="lname"></label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="lname" placeholder="Prénom" name="lname">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="email"></label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" style="text-align: right;" for="comment"></label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="5" id="comment"id="email" placeholder="Commentaires" name="email"></textarea>
								</div>
							</div>
							<div class="form-group" style="margin-top: 25px;">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default btn btn-secondary" style="border: 4px;">Envoyer</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
			<!--Formlaire -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
		</body>
		<footer>
			<!--Footer-->
			<?php include 'footer.php';?>
			<!--Footer-->
			</footer>
		</html>
