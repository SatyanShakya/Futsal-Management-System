<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>user login and registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@1,300&display=swap" rel="stylesheet">

</head>
<body>	
	<div class="container">
			

			<div class="logo">
				<img src="image\logo.jpg" width="200px">
				
			</div>
			<nav><ul>
					<li><a href="main.php">Home</a></li>
						<li><a href="futsal.php">Futsal</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contactus.php">Contact</a></li>
						<li><a href="register.php">Register</a></li>
					</ul>
			</nav>
		</div>	

<?php
if (isset($_POST['submit'])) {
	$id=$_POST['id'];	
	$teamname=$_POST['teamname'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$phonenumber=$_POST['phonenumber'];
	$stadium=$_POST['stadium'];
	
		if (empty($id) ) {
			echo "Please fill your Id"."<br>";
		}
		if (empty($teamname) ) {
			echo "Please fill your teamname"."<br>";
		}
		if (empty($city) ) {
			echo "Please fill your city"."<br>";
		}
		if (empty($address)) {
			echo "Please fill your address"."<br>";
		}
		if (empty($phonenumber) ) {
			echo "Please fill your phone number"."<br>";
		}
		if ( empty($stadium)) {
			echo "Please Select a stadium you wanna play in!"."<br>";
		}
		else{
			$conn=mysqli_connect('localhost','root','','futsal');
			if (!$conn) {
				die("connection failed".mysqli_connect_error());
			}
			$sql="INSERT INTO team(team_id,name,city,address,phone_no,stadium)
			VALUES('$id','$teamname','$city','$address','$phonenumber','$stadium')";
			if (mysqli_query($conn,$sql)) {
				echo "Registed Sucessfully";
				
			}
			else{
				echo "Error";
			}
			
		}
	}

?>





<form method="POST">

	ID:<input type="number" name="id"><br>	
	Team Name:<input type="text" name="teamname"><br>
	City:<input type="text" name="city"><br>
	Address:<input type="text" name="address"><br>
	Phone Number:<input type="number" name="phonenumber"><br>

	Stadium:<select name="stadium">
		<option>Shankhamul Futsal</option>]
		<option>Brothers Futsal</option>
		<option>Banglamukhi Futsal</option>
		<option>Heaven Futsal</option>
		<option>Patan Futsal</option>
		<option>Yala club</option>
		<option>Epic Futsal</option>
		<option>Pulchok Ground</option>
		<option>Thamel Club</option>
		<option>Night Ground</option>
		
	</select><br>

	<input type="submit" name="submit">

	
</form>
</body>
</html>