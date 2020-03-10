<?
<?php

$users = array(
	'user1' => array(
		"name" => "Sally",
		"lastname"=> "Walker",
		"occupation"=>"walking on the street",
		"adjective"=>"Lil"
	),

	'user2' => array(
		"name" => "Tom",
		"lastname" => "Jerry",
		"occupation" => "bounty hunter",
		"adjective" => "jokes so funny he kills people"
	)
);


echo $users['user1']['adjective'] . "\n" . $users['user1']['name'] . "\n" . $users['user1']['lastname'] . "\n" .$users['user1']['occupation'];

?>
