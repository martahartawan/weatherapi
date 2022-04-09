<?php
$cuaca = file_get_contents('https://api.openweathermap.org/data/2.5/weather?lat=35&lon=139&appid=eeda7ab3a071ae6b27768a2cdab7c32f');
$result = json_decode($cuaca, true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Cuaca</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- 
<style>
html{
	background:url('cuaca.jpg')no-repeat center fixed;
	-webkit-background-size:cover;
	-moz-background-size-cover;
	-background-size:cover;
} -->

</head>
<body>
<div class="card" style="width: 18rem;">
<img src="cuaca.jpg">
  <div class="card-body">
    <h5 class="card-title">Banjar Kaliuntu </h5>
    <p class="card-text">Cuaca hari ini			 : <?php print_r($result['weather'][0]['description']);?></p>
	<p class="card-text">Temperatur saat ini	 : <?php print_r($result['main']['temp']);?></p>
    <a href="#" class="btn btn-primary">next</a>
  </div>
</div>
</body>
</html>






