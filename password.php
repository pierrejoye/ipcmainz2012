<?php
$password = "rasmuslerdorf";
$hash = password_hash($password, PASSWORD_BCRYPT, 
		array("cost" => 7, "salt" => "usesomesillystringfor1237%#&^"));
if (password_verify($password, $hash)) {
	echo "ALL GOOD!<br />";
} else {
	echo "Ooopsie!<br />";
}

