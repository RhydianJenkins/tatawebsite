<?php
/*
	PHP script that takes the post data 'username', 'password', 'confirm-password', 'email'
	and checks it is all valid.
	If invalid, an array is returned containing all the errors.
	If valid, a new user will be created and 'true' will be returned
*/

if(!require(SCRIPTS_PATH . "/connect.php")) {
	//echo mysql_error(); //debugging purposes, uncomment when needed
	$errors[] = 'Something went wrong while trying to access the database. Please try again later.';
	return $errors;
}

$errors = array(); /* declare the array for later use just incase we want it in the future */
 
if(isset($_POST['username'])) {
	//the user name exists
	if(!ctype_alnum($_POST['username'])) {
		$errors[] = 'The username can only contain letters and digits.';
	}
	if(strlen($_POST['username']) > 30) {
		$errors[] = 'The username cannot be longer than 30 characters.';
	}
} else {
	$errors[] = 'The username field must not be empty.';
}
 
if(isset($_POST['password'])) {
	if($_POST['password'] != $_POST['confirm-password']) {
		$errors[] = 'The two passwords did not match.';
	}
} else {
	$errors[] = 'The password field cannot be empty.';
}
 
if(!empty($errors)) { /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
	return $errors;
}

//the form has been posted without, so save it
//notice the use of mysql_real_escape_string, keep everything safe!
//also notice the sha1 function which hashes the password
$sql = "INSERT INTO
			users(user_name, user_pass, user_email ,user_date, user_level)
		VALUES('" . mysql_real_escape_string($_POST['username']) . "',
			   '" . sha1($_POST['password']) . "',
			   '" . mysql_real_escape_string($_POST['email']) . "',
				NOW(),
				0)";

$result = mysql_query($sql);

if(!$result) {
	//echo mysql_error(); //debugging purposes, uncomment when needed
	$errors[] = 'Something went wrong while trying to access the database. Please try again later.';
	return $errors;
}

return true;

?>