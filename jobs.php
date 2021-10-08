<?php 
require_once("header.php");
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="css/jobs.css">
<link rel="stylesheet" type="text/css" href="css/all.css">
<script src="scriptjs/angular.js">  </script>   
<script src="scriptjs/angular-route.js"></script>
<script src="scriptjs/angular-resource.js"></script>
<script src="js/jobs.js"></script>
<script type="text/javascript">
	
</script>
</head>
<body ng-app="jobmod">
	<div ng-controller="searchctrl as sctrl">
		<div id="search2" >
			<input type="search" name="" placeholder="Search jobs" ng-model="searc">

</div>


<div class="jobsouter">
		<div class="jobsinner" id="jobsfilter">
				<label for="orderby">ORDER BY</label>
					<select name="orderby">
						<option>newest</option>
						<option>company rating</option>
						<option>salary</option>
					</select>
					<br><br><br>
					<label>EXPERIENCE</label>
				<div class="slidecontainer">
  				<input type="range" min="1" max="10" value="5" step="1" class="slider" id="myRange">
				</div>
				<br>
				<br>
				<br>
				<label>TIME : </label><br>
				PART TIME<input type="checkbox" name="jobtime"><br>
FULL TIME<input type="checkbox" name="jobtime"><br>
NIGHT JOB<input type="checkbox" name="jobtime"><br>
		</div>
			<div class="jobsinner" id="jobscontent">
				<div class="postjob" ng-repeat="x in sctrl.joblist | filter:searc">
					<h1>{{x.name | uppercase}}</h1>
						<div class="postjobin"><li>COMPANY : {{x.company | uppercase}}</li><li>SALARY : {{x.salary | currency:'INR':2}}</li><li>TIME : {{x.time}}</li></div><div class="postjobin"><li>SKILL SET : <t ng-repeat="y in x.skillset">{{y+" ,"|uppercase}}</t></li><li>LOCATION : {{x.location | uppercase}}</li><li>EXPERIENCE : {{x.experience}}</li></div>
				</div>
			</div>
</div>
</div>
</body>
</html>