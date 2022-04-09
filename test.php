<?
$data = file_get_contents('https://api.openweathermap.org/data/2.5/weather?lat=23&lon=115&appid=eeda7ab3a071ae6b27768a2cdab7c32f');
$result = json_decode($data, true);

var_dump($result);
?>