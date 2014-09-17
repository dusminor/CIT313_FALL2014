<?php
//Tomcat/Apache req statements
ini_set('display_errors','On');
error_reporting(E_ALL);

//insert require statement to includes folder for header
require('_includes/header.inc.php');

//create array with keys my name, fav color, fav movie, fav book, fav website
$myArray=array('Dustin', 'Blue', 'The Other Guys', 'The Bible', 'www.espn.com');
$myName=$myArray[0];
echo "<h1>$myName</h1>";

//create function using a loop to return every value in the array EXCEPT name in a <ul> echo this function
function myFunction($myArray)
{
foreach(array_slice($myArray,1) as $item)
{
echo "<ul>$item</ul>";
}
}

//execute myFunction
myFunction($myArray);

//insert require statement to includes folder for footer
require('_includes/footer.inc.php');
?>