<?
$cuaca = file_get_contents('https://api.openweathermap.org/data/2.5/weather?lat=35&lon=139&appid=eeda7ab3a071ae6b27768a2cdab7c32f');
$result = json_decode($cuaca, true);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cek cuaca</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <img src="https://www.pngdownload.id/png-owqopw/" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Banjar Kaliuntu Satu</h5>
    <p class="card-text">Cuaca hari ini : <?php print_r($result['weather'][804]['description']);?></p>
    <a href="#" class="btn btn-primary"></a>
  </div>
</div>
</body>
</html>