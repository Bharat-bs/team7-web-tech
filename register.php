
<html>
<head>
	<meta charset="utf-8">
	<title>
		REGISTER
	</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
<header>
	<div class="profBar">
	<a href="login.php"><li>LOGIN</li></a>
	<a href="register.php"><li>SIGNUP</li></a>
</div>
</header>
<div class="registerouter">
	<form name="userform" id="userform">
	<label for="firstname">FIRST NAME : </label>
		<input type="text" name="firstname">
	<label for="lastname">LAST NAME : </label>
		<input type="text" name="lastname">
	<label for="fathersname">FATHERS NAME : </label>
		<input type="text" name="fathersname"><br>
			<label for="sex">SEX : </label>
		<input type="text" name="sex"><br>
	<label for="dateofbirth">DATE OF BIRTH : </label>
		<input type="date" name="dateofbirth">
	<label for="age">AGE : </label>
		<input type="number" name="age">	
	<label for="maritalstatus">MARRIED : </label>
		<input type="checkbox" name="maritalstatus"><br>
	<label for="contacno">CONTACT NO : </label>
		<input type="text" name="contacno"><br>
	<label for="currentaddress">CURRENT ADDRESS : </label>
		<textarea rows="4" cols="40" name="comment" form="userform"></textarea><br>
	<label for="permanentaddress">PERMANANT ADDRESS : </label>
		<textarea rows="4" cols="40" name="comment" form="usrform"></textarea><br>
	<label for="emailaddress">EMAIL : </label>
		<input type="email" name="emailaddress"><br>
	<label for="userpassword">PASSWORD : </label>
		<input type="password" name="userpassword"><br>
	<label for="userpassword">PASSWORD : </label>
		<input type="password" name="userpassword"><br>
		<input type="button" name="submituserform" value="NEXT" onclick="window.location.href='registeredu.php';"><br>
</div>
</body>
</html>