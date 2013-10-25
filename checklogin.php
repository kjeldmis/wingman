<?php
// Start up your PHP Session 
    session_start();
$host=""; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name=""; // Database name
$tbl_name=""; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// encrypt password
$encrypted_mypassword=md5($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$encrypted_mypassword'";
$result=mysql_query($sql);


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' AND password='$mypassword'";
$result=mysql_query($sql);



// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){


        //Creates the Session "loggedin" which will be applied to the corresponding username
	$_SESSION ['loggedin'] = $myusername;
        //Will send the user to their profile page
        header("location:main_menu.php");
}

//If the username and password do not match each other or doesn't exist the user will be sent back to the Sign In screen with a message in the url-field
else {
    header("location:index.php?msg=wrong-username-or-password");
}

    


//This clears the objectbuffer
ob_end_flush();

	?>

















