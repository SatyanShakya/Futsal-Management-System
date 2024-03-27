<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
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


<!------------------Contact----------->

<div class="wrapper">
	<h2>Contact</h2>
	<div id="error_message"></div>

	<form id="myform" onsubmit="return validation1()">
		<div class="input-field">
			<input type="text" placeholder="Name" id="name">
			
		</div>
		<div class="input-field">
			<input type="text" id="subject" placeholder="Subject">
			
		</div>
		<div class="input-field">
			<input type="text" id="phone" placeholder="Phone">
			
		</div>
		<div class="input-field">
			<input type="text" id="email" placeholder="Email">
			
		</div>
		<div class="input-field">
			<textarea id="message" placeholder="Message"></textarea>
			
		</div>
		<div class="button">
			<input type="submit" >
		</div>
	</form>

</div>

<script type="text/javascript">
	function validation1(){
		var name = document.getElementById("name").value;
		var subject = document.getElementById("subject").value;
		var phone = document.getElementById("phone").value;
		var email = document.getElementById("email").value;
		var message = document.getElementById("message").value;
		var error_message = document.getElementById("error_message");
		var text;

		error_message.style.padding="2px";
		
		if (name.length<3) {
			text = "please Enter Valid Name";
			error_message.innerHTML=text;
			return false;
		}
		if (subject.length<10) {
			text = "please Enter Correct Subject";
			error_message.innerHTML=text;
			return false;
		}
		if (phone.length!=10) {
			text = "please Enter Valid Phone Number";
			error_message.innerHTML=text;
			return false;
		}
		if (email.indexof("@"== -1) || email.length<6) {
			text = "please Enter Valid email";
			error_message.innerHTML=text;
			return false;
		}
		if (message.length<20) {
			text = "please Enter More Than 20 Characters";
			error_message.innerHTML=text;
			return false;
		}
		alert("Form Submitted!")
		
		return true;
	}
</script>

</body>
</html>