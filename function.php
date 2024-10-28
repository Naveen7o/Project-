<?php session_start();
include_once('loginsystem/includes/config.php');
//Code for Registration 
if(isset($_POST['sub_1']))
{
    $companyName=$_POST['companyName'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $description=$_POST['description'];
    $msg=mysqli_query($con,"insert into reg_company(companyName,email,phone,city,description) values('$companyName','$email','$phone','$city','$description')");
	if($msg)
	{
		echo "<script>alert('Submitted successfully');</script>";
		echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
	}
}
if(isset($_POST['sub_2']))
{
    $companySelect=$_POST['companySelect'];
    $eventDate=$_POST['eventDate'];
    $eventDetails=$_POST['eventDetails'];
  
    $msg=mysqli_query($con,"insert into reg_event(companySelect,eventDate,eventDetails) values('$companySelect','$eventDate','$eventDetails')");
	if($msg)
	{
		echo "<script>alert('Submitted successfully');</script>";
		echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
	}
} 
if(isset($_POST['sub_3']))
{
    $contactName=$_POST['contactName'];
    $contactEmail=$_POST['contactEmail'];
    $message=$_POST['message'];
  
    $msg=mysqli_query($con,"insert into reg_contact(contactName, contactEmail, message) values('$contactName','$contactEmail','$message')");
	if($msg)
	{
		echo "<script>alert('Submitted successfully');</script>";
		echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
	}
}
?>