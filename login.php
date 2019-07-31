//Front end for login page
<html>
<div>
	<form style="text-align: center;" action="db.php" method="post">
		username<input type="text" name="username"><br>
		password<input type="password" name="password"><br>
		<input type="submit" value="submit">
	</form>
</div>
</html>


//Connecting to MySQL
<?php
	$connect= new mysqli('localhost','root','','login');

	if($connect->connect_error){
		die('connection failed');
	} else
	echo "connection worked";

	$username= $_POST['username'];
	$password= $_POST['username'];
  //here "user" is the name of my database in MySQL
	$sql="SELECT name FROM users WHERE username='$username' AND password='$password'";

	$result= $connect->query($sql);
    //add code to display the name of the user
	if($result->num_rows>0) {

		while($row = $results->fetch_assoc()){
 		   echo "<br>";
 		   echo "Admin name is" &row["name"];      
 		}	
	}
	else
		echo "Username and Password don't match";
	echo "<br>" ;
	echo $username;
?>
