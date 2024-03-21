<!DOCTYPE html>
<html>
<head>
<title> Form to Register</title>
</head>
<body>
<center>
<h1 style=" border-radius: 15px; background:orange;height: 45px; width: 472px;padding:4px;"><b style="color:blue;">STUDENT SIMPLE FORM</b></h1>
<fieldset style="width: 350px;background-color:skyblue">
<legend><h4><b style="color: blue">STUDENTS REGISTRATION FORM</b></h4></legend>
<form action="insert.php" method="POST">
			
Firstname<br>
					
<input type="text" name="firstname" placeholder=" firstname" required style="height: 25px; border-radius: 5px;">
<br>
Lastname
<input type="text" name="lasname" placeholder=" lastname" required style="height: 25px; border-radius: 5px;">
<br>
Genger<br>
<input type="gender" name="male"> male<br>
<input type="gender" name="male"> female<br>
<br>
EMAIL<br>					
<input type="text" name="email"  style="height: 25px; border-radius: 5px;">
<br>	
password<br>
<input type="password" name="password"  style="height: 25px; border-radius: 5px;">			
<form action<br><br>
<input type="submit" name="save" value="submit" style=" border-radius: 5px; background: #17a2b8;height: 25px; width: 62px;">
				<br>
</form>
<br>
<a href="tbl_users.php"  style="text-decoration: none;"><H3>Register</H3></a>
</fieldset>
	
</form>
</center>
 </body> </html>