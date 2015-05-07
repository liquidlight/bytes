<?php

	include 'classes/Mailchimp.php';

	$mc = new Mailchimp('2d80666f15b32afad18dc53974fc1e71-us10');

	$email = $_POST['email'];
	$name = $_POST['name'];

	header('Content-Type: application/json');

	try {
		$return = $mc->lists->subscribe(
			'3fed2229ab',
			array(
				'email' => $email,
				'name' => $name
			)
		);
		echo json_encode(array_merge(array('success' => true), $return));
	} catch (Exception $e) {
		echo json_encode(array('error' => $e->getMessage()));
	}