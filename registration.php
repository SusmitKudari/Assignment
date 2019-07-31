<?php 

	$uname = "";
	$email = "";
	$pwd = "";
	$id = 0;

	//connect to database

	$db = mysqli_connect('localhost','root','','Form');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else {
	echo 'connection ok';
}
 




	//if save button is clicked
if(isset($_POST['save']))
	{
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];

		$query = "INSERT INTO subscribe (Username,Email_Address,Password) VALUES ('$uname','$email','$pwd')";
		if ($db->query($query) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $query . "<br>" . $db->error;
		}
		mysqli_query($db,$query);
		header('location: index.php'); //redirect to index page after inserting
	}
?>