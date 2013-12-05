<?php
#
# Specify a directory where both the web server process and your ssh login account have read and write access
define('TEMP_DIRECTORY', '/tmp/');
// #
// # Did the request come from a github IP?
// if (stripos($_SERVER['REMOTE_ADDR'], '192.30.252.') === false) {
// 	#
// 	# Nope...
// 	die('bye');
// 	#
// } else {
	#
	# Yup, the request if from github
	#
	# Parse the json payload
	$payload_json = $_POST['payload'];
	$payload_object = json_decode($payload_json);
	$payload_text = print_r($payload_object, true);
	#
	# Write a temp file to flag a pull
	file_put_contents(TEMP_DIRECTORY . $payload_object->repository->name . '-was-pushed.txt', $payload_text);
	#
	# And now we wait... Eventually a cronjob will come looking for the temp file, do the pull, and then remove the temp file.
	#
// }
