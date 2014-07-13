<?php

require base_path()."/vendor/fzaninotto/faker/src/autoload.php";

function generate($numUsers){
	$faker = Faker\Factory::create();
	$users = "";
	for ($i = 0; $i < $numUsers;$i++){
		$users .= $faker->name;
		$users .= "\n<br>\n<br>\n";
	}
	return $users;
}