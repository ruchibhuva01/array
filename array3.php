<?php

$student_detail=array(array("name"=>"ruchi","div"=>"B1","rollno"=>11,"city"=>"rajkot"),
array("name"=>"disha","div"=>"B1","rollno"=>23,"city"=>"rajkot"),
array("name"=>"richa","div"=>"B1","rollno"=>24,"city"=>"rajkot"),
array("name"=>"prushti","div"=>"B1","rollno"=>25,"city"=>"rajkot"),
array("name"=>"hiteshree","div"=>"B1","rollno"=>26,"city"=>"rajkot"),
array("name"=>"sakshi","div"=>"B1","rollno"=>27,"city"=>"rajkot"));

foreach($student_detail as $myval)
{
	print_r($myval);
	echo "<br>";
}
print_r($student_detail);
echo $student_detail[3]["name"];
?>
