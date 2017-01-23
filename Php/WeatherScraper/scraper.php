<?php
  


$city = $_GET['city'];

$city = str_replace(" ", "-", $city);

$url = "http://www.weather-forecast.com/locations/".$city."/forecasts/latest";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);

preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $data, $matches);

echo $matches[1];


?>