<?php

$conn=mysqli_connect("localhost","root","","guvi");

if(isset($_POST["name"]))
	{
$name=$_POST['name'];
    $sql=" SELECT * FROM resume WHERE name like '%".$name."%'";
	$result = $conn->query($query);
	}?>

<html>
	<head>
		<title>Resume</title>
		<style>
		
.wrapper
{
	width:100%;
	height:100%;
	background-color:mintcream;
}

*
{
	padding:0px;
	margin:0px;
}

.header
{
height:45px;
width:100%;
background-color:blue;
}

.sub
{
height:20px;
width:65px;
margin-left:1300px;
background-color:yellow;
}

.smile
{
height:550px;
width:80%;
margin-left:150px;
background-color:#fffff0;

}

.footer
{
	width:100%;
	height:5%;
	background-color:blue;
	float:left;
	color:#FFF;
	text-align:center;
}

		
		</style>
	</head>

	<body>
	<form action="success2.php">
		<div class="wrapper">

			<div class="header">
				<center><b><p style="font-size:22; color:white">WELCOME</p></b><center>

				<div class="sub">
					<center><a href="index.html"><input type="button" value="LOG OUT"/></a></center>
				</div>
			
			</div>
				
			<div class="smile"><br/><br/><br/>
				<p>Here you can view your Resume as soon you update it.</p><br/>
				<p>Hope this website creation is understandable and you like it.</p><br/><br/><br/>
				
				<b><h1>Your Resume</h1></b><br/>
				<input type="file" name="pic" accept="image"><br/><br/><br/>
				
				<b><h1>Your Profile picture</b></h1><br/>				
				<input type="file" name="pic" accept="image"><br/><br/><br/><br/>
				
				<form action="submit.html">
				<input type="submit" value="submit" name="submit"/></form>
				
			</div>
			
			<div class="footer">
            	<p>copyright &copy;2016</p>
            </div>
			
			
		</div>
	</body>

</html>
