<?php

$student_detail=array("name"=>"ruchi","div"=>"B1","rollno"=>11,"email"=>"ruchi.229111@gmail.com","city"=>"rajkot");
foreach($student_detail as $val)
{
	echo $val;
	echo "<br>";
}
print_r($student_detail);
echo $student_detail["div"];
?>
