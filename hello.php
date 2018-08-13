<?php
$gender = "male";
$major = "biochem";

function detGender() {
	echo "<p>Noah is a " . $GLOBALS['gender'] . 
	$GLOBALS['major'] . "</p>";
}

detGender();

echo "<p>Shruthi is not a $gender</p>";
?>