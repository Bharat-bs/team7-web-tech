<?php 
require_once("header.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>APPLY
	</title>
		<link rel="stylesheet" type="text/css" href="css/apply.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>

<div class="applyouter">
	<form name="postjob">
	<label for="category"></label>
<select name="category"><br>
<option>ABCND</option>
<option>EFBCG</option>
<option>ASDD</option>
<option>ASDF</option>
<option>HGDC</option>
<option>SDCSE</option>
</select><br>
<br>
<br>
<label for="preferedjob">PREFERED JOB</label><br>
<input type="text" name="preferedjob"><br>
<label for="preferedjob">SKILL SET</label><br>
<input type="search" name=""><br>

PART TIME<input type="checkbox" name="jobtime"><br>
FULL TIME<input type="checkbox" name="jobtime"><br>
NIGHT JOB<input type="checkbox" name="jobtime"><br>
<label for="preflocation">PREFERED LOCATION</label><br>
<input type="text" name="preflocation"><br>
<label for="description">DESCRIPTION</label><br>
<textarea name="description" rows="4" cols="50"></textarea><br><br>
<label for="usrproof">ADHAAR PROOF</label><br>
<input type="file" name="usrproof"><br>
<label for="resume"> RESUME</label><br>
<input type="file" name="resume"><br>
<input type="submit" name=""><br>
</form>
</div>
</body>
</html>