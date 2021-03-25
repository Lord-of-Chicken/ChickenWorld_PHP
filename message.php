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
		<!--Resto-->
		<section>
		<div class="container">
  <h1>Leave us a little message</h1>
  <form class="form-inline m-2" action="create.php" method="POST">
    
	<label for="date">Date:</label>
    <input type="date" class="form-control m-2" id="date" name="date">

    <label for="name">Name:</label>
    <input type="text" class="form-control m-2" id="name" name="name">

	<label for="mail">E-mail:</label>
    <input type="email" class="form-control m-2" id="mail" name="mail">

	<label for="message">Message:</label>
    <input type="text" class="form-control m-2" id="message" name="message">


    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>	

<table class="table">
    <tbody>
      <?php include 'read.php'; ?>
    </tbody>
  </table>
  
	</section>
		<!--Resto-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>
	<footer>
			<!--Footer-->
			<?php include 'footer.php';?>
			<!--Footer-->
		</footer>
	</html>
