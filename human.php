<?php
	class Human {
		function Human() {
			$this->gender = "male";
			$this->profession = "stripper";
		}
	}

	$noah = new Human();

	echo $noah->gender;
	print $noah->profession;
?>