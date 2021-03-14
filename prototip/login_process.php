<?php session_start();

include('connection.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($conn,$user_unsafe);
$pass = mysqli_real_escape_string($conn,$pass_unsafe);

$login="SELECT * FROM prijava WHERE username='$user' AND pwd='$pass';";
$query=mysqli_query($conn,$login) or die(mysqli_error($conn));
$row=mysqli_fetch_array($query);
           
           $name=$row['username'];
           $counter=mysqli_num_rows($query);
           $id=$row['id'];
           
	  	if ($counter == 0) 
		  {	
		  echo "<script type='text/javascript'>alert('Pogrešno korisničko ime i/ili lozinka!');
		  document.location='index.php'</script>";
		  } 
	  else
		  {

		$_SESSION['id']=$id;	
	  	$_SESSION['username']=$name;
	
	  		
	    echo "<script type='text/javascript'>document.location='home1.php'</script>";
	  }
}

if(isset($_POST['prijava']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($conn,$user_unsafe);
$pass = mysqli_real_escape_string($conn,$pass_unsafe);

$login="SELECT * FROM prijava_admin WHERE username='$user' AND pwd='$pass';";
$query=mysqli_query($conn,$login) or die(mysqli_error($conn));
$row=mysqli_fetch_array($query);
           
           $name=$row['username'];
           $counter=mysqli_num_rows($query);
           $id=$row['id'];
           
	  	if ($counter == 0) 
		  {	
		  echo "<script type='text/javascript'>alert('Pogrešno korisničko ime i/ili lozinka!');
		  document.location='index.php'</script>";
		  } 
	  else
		  {

		$_SESSION['id']=$id;	
	  	$_SESSION['username']=$name;
	
	  		
	    echo "<script type='text/javascript'>document.location='home2.php'</script>";
	  }
}


?>

