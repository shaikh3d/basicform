<?php

define ('DB_NAME', 'membership');
define ('DB_USER', 'root');
define ('DB_PASSWORD', 'salam');
define ('DB_HOST', 'localhost');


$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
	
	
	if(!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if(!mysqli_select_db($con,'membership'))
	{
		echo 'Database Not Selected';
	}
	
	
	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Fathername = $_POST['fathername'];
	$Cnic = $_POST['cnic'];
	$Dob = $_POST['dob'];
	$Gender = $_POST['gender'];
	$Contactno = $_POST['contactno'];
	$Cellno = $_POST['cellno'];
	$Email = $_POST['email'];
	$Employment = $_POST['employment'];
	$Profession = $_POST['profession'];
	$Homeaddress = $_POST['homeaddress'];
	$Province = $_POST['province'];
	$City = $_POST['city'];
	$District = $_POST['district'];
	$Country = $_POST['country'];
	$Volunteertime = $_POST['volunteertime'];
	$Facebookid = $_POST['facebookid'];
	$Twitterid = $_POST['twitterid'];
	$Whatsappnumber = $_POST['whatsappnumber'];

	$sql = "INSERT INTO form1 (firstname, lastname, fathername, cnic, dob, gender, contactno, cellno, email, employment, profession, homeaddress, province, city, district, country, volunteertime,facebookid,twitterid,whatsappnumber)	VALUES ('$Firstname','$Lastname','$Fathername','$Cnic','$Dob','$Gender','$Contactno','$Cellno','$Email','$Employment','$Profession','$Homeaddress','$Province','$City','$District','$Country','$Volunteertime','$Facebookid','$Twitterid','$Whatsappnumber')";
	
	
	if (!mysqli_query($con, $sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Data Successfully Saved';
	}
	
 ?>