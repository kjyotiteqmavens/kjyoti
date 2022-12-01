<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action=""  name ="months1" method="get" >
  Months:<input type="text"  name ="months1" placeholder ="Enter the months" >
</form>
<!-- <form action="" method="post" >
  Months:<input type="text"  name ="months" placeholder ="Enter the months" >
</form> -->

<?php
ini_set('display_errors', 1);
$months1 = $_GET['months1'];
if(isset($_GET['months1'])){
if($months1 == 1) {
  echo "january";
}
else if($months1 == 2) {
  echo "february";
}
else if($months1 == 3) {
  echo "March";
}
else if($months1 == 4) {
  echo "April";
}
else if($months1 == 5) {
  echo "May";
}
else if($months1 == 6) {
  echo "June";
}
else if($months1 == 7) {
  echo "July";
}
else if($months1 == 8) {
  echo "August";
}
else if($months1 == 9) {
  echo "September";
}
else if($months1 == 10) {
  echo "October";
}
else if($months1 == 11) {
  echo "November";
}
else if($months1 == 12) {
  echo "December";
}
}
?>
<form action="" name ="months2"  method="post" >
  Months:<input type="text"  name ="months2" placeholder ="Enter the months" >
</form>
<?php
ini_set('display_errors', 1);
$months2 = $_POST['months2'];
if(isset($_POST['months2'])){
switch($months2){
  case '1':
  echo "jan";
  break;
  case '2':
  echo "february";
  break;
  case '3':
  echo "March";
  break;
  case '4':
  echo "April";
  break;
  case '5':
  echo "May";
  break;
  case '6':
  echo "June";
  break;
  case '7':
  echo "July";
  break;
  case '8':
  echo "August";
  break;
  case '9':
  echo "September";
  break;
  case '10':
  echo "October";
  break;
  case '11':
  echo "November";
  break;
  case '12':
  echo "December";
  break;
  
}
echo "<br>";
}



?>
<?php
for($i = 0; $i <=50; $i++){
  echo $i;
  echo "<br>";
}
?>
 <?php
$i = 0;
while($i<=50){
  echo $i;
  echo "<br>";
  $i++;
}
?> 
<?php
$i=1;
do{
  echo $i;
 
  echo "<br>";
  $i++;
}
while($i<30)
?>
<?php
$car = array("volvo"=>20,"toyota"=>50,"maruti"=>40);
foreach($car as $name => $val){
  echo "$name => $val";
  echo "<br>";
}
?>
<?php
$str = "Helloworld";
echo strlen($str);
echo "<br>";
echo str_replace("Helloworld", "welcome","Helloworld");
echo "<br>";
echo str_word_count($str );
echo "<br>";
echo strrev($str);
echo "<br>";
?>
<?php
$arr = array("ram" =>34,"shyam" =>23,"sita" =>45,"rohan" =>12);
print_r(array_keys($arr));
print_r(array_values($arr));
print_r(array_change_key_case($arr,CASE_UPPER));
echo "<br>";
echo count($arr);
echo "<br>";
?>
<?php
$arr = array(
  array(
    "first_name" => "Jyoti",
    "last_name" => "kumari",
    "id" => 1805304
  ),
  array (
    "first_name" => "shalini",
    "last_name" => "kumari",
    "id" =>  1805305

  ),
  array (
    "frist_name" => "puja",
    "last_name" => "kumari",
    "id" =>  1805306

  ),
  array (
    "first_name" => "anu",
    "last_name" => "kumari",
    "id" =>  1805307

  ),
  array (
    "first_name" => "viki",
    "last_name" => "kumari",
    "id" =>  1805308

  )

  );
$name = array_column($arr,"first_name","id");
$last_name = array_column($arr,"first_name");
print_r($name);
echo "<br>";
print_r($last_name );
echo "<br>";

?>
<?php



?>

  
</body>
</html>