<?php
// MikiPatel-8622608
$data = explode(" ","Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,sunt in culpa qui officia deserunt mollit anim id est laborum");
//sort data  
sort($data);

    $clength = count($data);
    for($i = 0; $i < $clength; $i++) {
		//array display
        echo $data[$i]." "; 
       
    }


// find duplicate
function duplicate($input){  
	$text = strtolower($input); 
	//string to lower case
    for($i = 0;$i<strlen($text);$i++){  
        //one charactor from string
        for($j = $i + 1;$j < strlen($text);$j++){ 
			//comapare oparator
			if($text[$i] == $text[$j]){ 
                return true;
            }
        }
    }
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	//if check condition
if(!empty($_POST['firstname'])) 
{ 
    
	echo '<br>';
	// function check condition
    $result = duplicate($_POST['firstname']);
	
	// if true than it print meassage
	if($result == "true"){

       
        echo " <strong class='error'>Duplicate character in string</strong>";

    }
    else{
     echo "<strong > No duplicate character in string</strong>";
    }
}
else{
    echo "<p>Please enter text</p>";
}


}   
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>