<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="proxy1.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
	<div class="logo">
		<a href="#"><img src="logo.jpeg"></a>
	</div>
	<ul>
		<li><a href="#here">Features</a></li>
		<li><a href="#">How To</a></li>
		<li class="SignUp"><a href="" color="white">Sign Out</a></li>
	</ul>
</div>
    <!-- Header -->
<a name="about"></a>
<div class="intro-header">
    <div class="container">
        <div class="intro-message">
            <!--<h1>Search Page</h1>-->
            <h3  style="color:black;padding:10px;border-radius:10px;transition:0.3s;opacity:0.8;font-family:Verdana;border:none;margin-left:7%;background-color:white;width:40%;">Search the student by his/her name</h3>
            <!--<hr class="intro-divider">-->
            <form class="searchbar" action="DivisionSearch.php" method="POST">
				Enter the name of the student:<br/><br/>
				<input type="text" placeholder="" name="firstname" value="" class="intext1"/><br/><br/>
				<input type="submit"  name="subname" value="submit"  class="intext" style="color:white;"/><br/><br/>
            <!-- </form>
				<br><br>
			<form class="searchbar" action="DivisionSearch.php" method="POST"> -->
				Enter the Division:<br/><br/>
				<input type="text" placeholder="" name="classno1" value=""  class="intext1" id="classno1"/><br/><br/>
				<input type="submit" name="subname" value="submit" class="intext" style="color:white;" onclick="extracurrics()"/><br/><br/>
			</form>
			<div id ="detailextrainfo" class="detailextrainfo">
				<a href="javascript:void(0)" class="closeExtrabtn" onclick="closeExtra()">&times;</a>
				<?php include "DivisionSearch.php"; ?>
			</div>
			<h3  style="color:black;padding:10px;border-radius:10px;transition:0.3s;opacity:0.8;font-family:Verdana;border:none;float:right;margin-right:7%;margin-top:-26.5%;background-color:white;width:40%;">Search the event</h3><br/><br/><br/><br/>
			<form class ="searchbar2">
				Enter the event:<br/><br/>
				<input type="text" placeholder="" name="eventname" value=""  class="intext1"/><br/><br/><br/>
				<form action="eventparticipation.php" method="POST">
					<input type="submit"  name="subeventname" value="submit"  class="intext" style="color:white;"/><br/><br/>
				</form>
			</form>
        </div>                            
	</div>
</div>
<script>
		function extracurrics(){
		document.getElementById("detailextrainfo").style.width = "100%";
		window.scrollTo(0,0);
	}
	function closeExtra() {
		document.getElementById("detailextrainfo").style.width = "0%";
	}
</script>
</body>
</html>
