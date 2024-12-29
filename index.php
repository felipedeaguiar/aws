<?php
header('Content-Type: application/json');
echo json_encode([
	'status' => 'success',
	'message' => 'Hello, this is a JSON response!',
	'data' => [
		'name' => 'ChatGPT',
		'version' => '4.0'
	]
]);