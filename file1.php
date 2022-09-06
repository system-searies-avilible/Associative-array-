<?php
//Associative  array:

$count=array("name"=>"ali","age"=>"21","Address"=>"lyari,karachi");

echo$count["name"]."<br>";
echo$count["age"]."<br>";
echo$count["Address"]."<br>";


echo"<br><br>";

$age=["bill"=>25,"steve"=>28,"elon"=>22];
$age["elon"]=50;

echo"<pre>";
var_dump($age);
echo"</pre>";
?>