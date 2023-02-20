<?php

//06:43am 18/02/2023
//$text = "Smart Soft It";
//
//$x = 45;
//Variable
//A-Z;
//a-z;
//0-9;
//echo $x;
//
//data type
echo '<br/>';
//array
//$data = ['html','css','php'];
//echo '<br/>';
//echo $data[2];
// Variable ,data type,concat,print, function,
//echo '<br/>';
//echo "html"." "."css";
//phpinfo(); important function;

function num()
{
    echo "Something";
}
num();

function name()
{
    echo "My name is Motaleb Hosen";
}
name();


function title()
{
    return "this is title";
}

function info($name, $roll)
{
    return "My name is $name, Roll: $roll";
}

echo info("something", 45);

function han($name = "Motaleb", $roll = "12345678")
{
    return "My name is $name, Roll: $roll";
}

echo han("something", 45);


?>
<?php
$x = 5;

if($x == 45){
    echo "Yes";
}
else{
    echo "No";
}

$z = 5;

if($z === 45){
    echo "Number";
}
else{
    echo "String";
}

$x = 5;
$y =7;

if ($x >= $y){
    echo "yes";
}
else{
    echo "No";
}

$x = 5;
$y =7;

if ($x <> $y){
    echo "yes";
}
else{
    echo "No";
}

//result Count
$mark = 200;
$pass_mark = 40;

if( $mark <= 100 && $mark >= 80){
    echo "<h1>A+</h1>";
}
elseif ($mark <= 79 && $mark >= 70){
    echo "<h1>A-</h1>";
}
elseif ($mark <=69  && $mark >= 65){
    echo "<h1>A-</h1>";
}
else {
    echo "<h1>Invalid</h1>";
}

//even and odd number

$x = 45;
if($x % 2 ==0){
    echo "Even";
}
else{
    echo "Odd";
}

$x = 56;
if($x >50){
    if($x % 2 == 0){
        echo "Even";
    }
    else{
        echo "odd";
    }
}
else{
    echo "small";
}
//printf
$name = "Motaleb";
$roll = 123456;
printf('my name is printf without return %s roll %d',$name,$roll);
echo "<br/>";
$text = sprintf('my name is %s with return roll %d',$name,$roll);
//sprintf means return
echo $text;
//Associative Array;
$info = [
    'name'=> 'Motaleb',
    'roll' => 3444,
    'age' =>'34'
];
echo $info['name'];

$info = [
    'name'=> 'Motaleb',
    'roll' => 3444,
    'age' =>'34'
];

gettype,print_r,var_dump;
echo $info['name'];
echo "<br/>";
$x = "text";
var_dump($info);
echo "<br/>";
var_dump($x);
echo "<br/>";
echo "<pre>";
print_r($info);
echo "</pre>";
echo "<br/>";
echo gettype($info);
//for loop
for($x = 1; $x <= 10; $x++){
    echo $x." " ."<br/>"."  ";
}

for($i = 2; $i <= 100; $i = $i+2){
    echo $i." " ."<br/>"."  ";
}
for($a = 1; $a <= 100; $a = $a+2){
    $result = $a+2;
    echo $a."+2" ."<br/>"." = ".$result;
}
//while loop
$c = 2;
 while ($c < 10){
     echo $c;
     $c +=2;
 }

// do while loop

$i = 1;
do{
    echo $i."<br/>";
    $i++;
}
while($i <=10);

//foreach loop 10:43am 18/02/2023

$data = ['html','CSS','PHP','C++'];

foreach ($data as $k => $v){
    echo $k." " .$v."<br/>";
}

//Constant 10:53am 18/02/2023
echo __FILE__;
//get
$data = [];

$data['name'] = "ANWAR";
$data['age'] = 50;

print_r($data);

if(isset($_GET['name'])){
    echo $_GET['name'];
}
else{
    echo $_GET['name'] = "Text";
}

<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'bd';
$email = isset($_GET['email']) ? $_GET['email'] : 'bd@gmail.com';


?>


<table>
    <tr>
        <td>Name</td>
        <td>:<?php echo $name?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:<?php echo $email?></td>
    </tr>
</table>

<form  method="get" >
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email Address">
    <input type="submit" name="submit" value="Submit" >
</form>

<?php

//function title()
//{
//    return "this is title";
//}
//$mark = 6;
//if($mark >= 40){
//    echo "pass";
//}
//else{
//    echo "fail";
//}

//Super Globals list

$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : 'bd';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : 'bd@gmail.com';


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>document</title>
</head>
<body>
<form  method="post" >
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email Address">
    <input type="submit" name="submit" value="Submit" >
</form>

<table>
    <tr>
        <td>Name</td>
        <td>:<?php echo $name?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:<?php echo $email?></td>
    </tr>
</table>
</body>
</html>


$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : 'bd';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : 'bd@gmail.com';

<!--session-->
index.php
<?php
session_start();
$_SESSION['name'] = "something";
$_SESSION['age'] = 30;
?>


save.php

<?php
session_start();

echo $_SESSION['name'];
echo $_SESSION['age'];




?>
<!--server-->
echo "<pre>";
print_r($_SERVER);
echo "<pre/>";
<!--globals -->
$x = 45;
$y = 5;
function sum(){
    global $x,$y;
    $sum = $x + $y;
    return $sum;


}

echo sum();
<!--variable in function -->
function test(){
    global $a;
    $a = 5;
}

test();
echo $a;

<!--Globals Variable -->

$x = 4;
$y = 5;
function test(){
   $GLOBALS['sum'] = $GLOBALS['x'] = $GLOBALS['y'] ;
   return $GLOBALS['sum'];
}

echo test();
