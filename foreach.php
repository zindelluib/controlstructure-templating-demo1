<?php

	$user  =  array(
		"fname" => "John",
		"lname"  => "Doe",
		"username" => "jdoe",
		"email"  => "jdoe@linuxmaster.com",
		"password" => password_hash("p@ssword", PASSWORD_DEFAULT),
		"contacts" => array(
			array(
				"name" => "Jane Doe",
				"relationship" => "sister"
			),
			array(
				"name" => "Mary Doe",
				"relationship" => "wife"
			)

		)
	);

	// $proglang  = array("PHP","Java","C++","Python","Ruby");

	// foreach($proglang as $prog){
	// 	echo $prog .  "<br>";

	// }

	foreach($user as $key => $val){
		if(!is_array($val)){
			echo "$key  = $val" . "<br>";
		}
	}
	echo "<br>";
	foreach($user['contacts'] as $contact){
		echo "Name: "  . $contact['name'];
		echo "<br>";
		echo "Relationship: "  . $contact['relationship'];
		echo "<br><br>";
	}	

?>