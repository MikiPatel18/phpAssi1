<?php
// MikiPatel-8622608
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$firstname = $lastname= $age = '';

	// check the value
	if (empty($_POST['firstname'])) {
		//display error message  
		$firstnameError = 'Please enter first name'; 
    } 
    else{
        $firstname = $_POST['firstname'];
    }
	// check the value
    if (empty($_POST['lastname'])) {
		//display error message
		$lastnameError = 'Please enter Last name';
    } 
    else{
        $lastname = $_POST['lastname'];
	}
	// check the value
	if (empty($_POST['age'])) {
		//display error message
		$ageError = 'Please enter age';
    } 
    else{
        $age = $_POST['age'];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php if (isset($firstname)) echo $firstname; ?>"></label>
		<span id="error"><?php if (isset($firstnameError)) echo $firstnameError ?></span><br>
	</p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?php if (isset($lastname)) echo $lastname; ?>"></label>
		<span id="error"><?php if (isset($lastnameError)) echo $lastnameError ?></span><br>
	</p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value="<?php if (isset($age)) echo $age; ?>"></label>
		<span id="error"><?php if (isset($ageError)) echo $ageError ?></span><br>
	</p>

	
	<p>
    <label for="newsletter1">Subscribe to newsletter: 
    </label><input type="radio" name="newsletter" value="Y" <?php if(isset($_POST['newsletter']) && ($_POST['newsletter'] == "Y")) 
          echo 'checked="checked" '; ?>> Yes 
          <input type="radio" name="newsletter" value="N" <?php if(isset($_POST['newsletter']) && ($_POST['newsletter'] == "N")) 
          echo 'checked="checked" '; ?>> No </p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>



