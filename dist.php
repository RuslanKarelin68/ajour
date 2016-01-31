<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?php
/* 444477 */
if(isset($_POST['C'])):
$a = str_replace ( ' ', '+', $_POST['A'] );
$b = str_replace ( ' ', '+', $_POST['B'] );

  
  $kurl = curl_init("https://maps.googleapis.com/maps/api/distancematrix/json?origins=$a&destinations=$b&language=ru-RU&key=AIzaSyD5COe-PlKVg9f0J982YVRr0xmfVkp3LpY");
  curl_setopt($kurl, CURLOPT_HEADER, 0);
  curl_setopt($kurl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($kurl, CURLOPT_BINARYTRANSFER,1);
  $rawdata = curl_exec($kurl);
  
  //print_r(json_decode($rawdata));
  $arr = json_decode($rawdata);
  //echo $rawdata->rows->elements->distance->text;
  //print_r($rawdata['rows']);
  //print_r($arr->rows[0]->elements[0]->distance->text);
  echo $arr->rows[0]->elements[0]->distance->text.' или '.$arr->rows[0]->elements[0]->distance->value.' метров';
 endif; 
 /* $ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://maps.googleapis.com/maps/api/distancematrix/json?origins=32.089990103993344,34.807056707050748&destinations=32.089995103993353,34.807056707050776"); 
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$output = curl_exec($ch); 
curl_close($ch);   
var_dump($output);*/
  
 ?>
<form action="" method="post" >
<p>Точка А</p>
<input type="text" name="A" />
<p>Точка Б</p>
<input type="text" name="B" />
<br><br>
<input type="submit" name="C" value="Подсчитать расстояние" />
</form>
 </body>
 </html>
