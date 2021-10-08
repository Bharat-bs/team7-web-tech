<html>
<head>
	<meta charset="utf-8">
	<title>
		REGISTER
	</title>
	<link rel="stylesheet" type="text/css" href="css/registeredu.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">

<script src="scriptjs/angular.js">  </script>   
<script src="scriptjs/angular-route.js"></script>
<script src="scriptjs/angular-resource.js"></script>
	<script src="js/regedu.js"></script>
</head>
<body ng-app="regedumod">
	<header>
	<div class="profBar">
	<a href="login.php"><li>LOGIN</li></a>
	<a href="register.php"><li>SIGNUP</li></a>
</div>
</header>
<div class="registerouter" >
<form>
<label for="qualification">QUALIFICATION: </label>
<select id="qualification" name="qualification">
  <option value="none">NONE</option>
  <option value="sslc">SSLC</option>
  <option value="highschool">HIGH SCHOOL</option>
  <option value="ug">UG</option>
  <option value="pg">PG</option>
</select><br>
<br>
</form>
<div ng-controller="eduinfoctrl as list">
<h3>ACADEMIC RECORD: </h3><br><br>
<form name="usereduform">
		<label for="coursename">COURSENAME : </label>
	<input type="text" name="coursename" ng-model="list.course"><br>
		<label for="instituioname">NAME OF INSTITUTION : </label>
	<input type="text" name="instituioname" ng-model="list.institution"><br><br>
	<label for="boardname">BOARD OF STUDY : </label>
	<input type="text" name="boardname" ng-model="list.board"><br>
	<label for="passingyear">YEAR OF PASSING : </label>
	<input type="year" name="passingyear" ng-model="list.year"><br>
	<label for="marks">MARKS OR CGPA : </label>
	<input type="text" name="marks" ng-model="list.mark"><br>
	<input type="submit" name="" ng-click="list.addedu();" onclick="reset();">
</form>
<table>
	<tr>
		<th>SNO</th>
		<th>CLASS OR COURSE</th>
		<th>NAME OF INSTITUTION</th>
		<th>BOARD OF STUDY</th>
		<th>YEAR OF PASSING</th>
		<th>MARKS OR CGPA</th>
	</tr>
<tr ng-repeat="info in list.eduinfo">
	<td>{{$index+1}}</td><td>{{info.course}}</td><td>{{info.institution}}</td><td>{{info.board}}</td><td>{{info.passyear}}</td><td>{{info.mark}}</td><td><button ng-click="list.removedu($index);">remove</button></td>
</tr>
</table>
</div>
<br>
<label for="experience">FRESHER: </label>
<input type="checkbox" name="experience" ng-model="experience">
<div ng-hide="experience" ng-controller="cominfoctrl as com">
<label for="">YEARS OF EXPERIENCE: </label>
<input type="number">
<br>
<h3>PREVIOUS EMPLOYMENT HISTORY: </h3>
<form name="employmentrecord">
		<label for="coursename">COMAPANY NAME : </label>
									<input type="text" name="coursename"  ng-model="com.name"><br>
		<label for="instituioname">ADDRESS : </label>
									<textarea name="instituioname" ng-model="com.address"></textarea><br>
	<label for="boardname">CONTACT NO : </label>
									<input type="text" name="boardname" ng-model="com.contact"><br>
	<label for="passingyear">JOINING DATE : </label>
									<input type="date" name="passingyear" ng-model="com.join"><br>
	<label for="marks">DATE OF RESIGNATION : </label>
									<input type="date" name="marks" ng-model="com.end"><br>
		<label for="passingyear">DESIGNATION : </label>
									<input type="text" name="passingyear" ng-model="com.designation"><br>
	<label for="marks">SALARY : </label>
									<input type="text" name="marks" ng-model="com.salary"><br>
		<label for="marks">REASON FOR RESIGNATION : </label>
									<textarea name="marks" ng-model="com.reason"></textarea><br>
	<input type="submit" ng-click="com.addcom();" onclick="reset();">
</form>
<table>
	<tr>
		<th>SNO</th>
		<th>COMAPANY NAME  </th>
		<th>ADDRESS</th>
		<th>CONTACT NO</th>
		<th>JOINING DATE</th>
		<th>DATE OF RESIGNATION</th>
		<th>DESIGNATION</th>
		<th>SALARY</th>
		<th>REASON FOR RESIGNATION</th>
	</tr>
<tr ng-repeat="company in com.cominfo">
	<td>{{$index+1}}</td>
	<td>{{company.name | uppercase}}</td>
	<td>{{company.address}}</td>
	<td>{{company.contact}}</td>
	<td>{{company.join |date}}</td>
	<td>{{company.end |date}}</td>
	<td>{{company.designation}}</td>
	<td>{{company.salary | currency:INR:2}}</td>
	<td>{{company.reason}}</td>
	<td><button ng-click="com.removecom($index);">remove</button></td>
</tr>
</table>
</div>


<p onclick="">Terms and Conditions</p>
<!-- <button>remove</button> -->
	<div class="declaration">
I.I HEREBY DECLARE THAT ALL THE ABOVE INFORMATION PROVIDED BY ME TO THE BEST OF MY KNOWLEDGE AND BELIEF.ACCURATE & I ACCEPT THAT IF IT IS FOUND THAT I HAVE SUPRESSED ANY MATERIAL INFORMATION INTENTONACY OR OTHERWISE. THEN MY EMPLOYMENT IS LIABLE FOR SUMMARY TERMINATION.<br><br>

II.FURTHER UNDERTAKE THAT IAM BOUND TO FURNISH TO THE COMPANY AND CHANGE IN MY PERSONAL , PROFESSIONAL, SOCIAL OR GENERAL STATUS AT ANY TIME IN FUTURE, AND THAT IF I FALL TO DO SO, I SHALL HAVE VOILATED THE BASIC UNDERSTANDING OF THIS EMPLOYMENT.		
	</div><br><br>
	<button style="margin-left: 70vw;">accept</button><br>
	<input type="submit" name="" style="margin-top:3vh" onclick="window.location.href='index.php';">
</div>
<br><br><br><br><br><br><br>
</body>
</html>