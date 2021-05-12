<?php
//array --> collection of data
//multidimensional  array
//include('work.php');
//GET method
$conn=mysqli_connect('localhost','ramkumar','ramkumar@1234','developer');
if(!$conn)
{
  echo "error".mysqli_connect_error;
}
$mail=$name=$domain='';
if(isset($_POST['submit']))
{
  if(empty($_POST['email']))
  {
    echo "email field is empty";
  }
  else {
      $mail=$_POST['email'];
      if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
      {
        echo "invalid email";
      }
      else {
        echo "valid email";
      }
  }
  if(empty($_POST['title']))
  {
    echo "name field is empty";
  }
  else {
      $name=$_POST['title'];
  }
  if(empty($_POST['domain']))
  {
    echo "domain field is empty";
  }
  else {
      $domain=$_POST['domain'];
  }
$mail=mysqli_real_escape_string($conn,$_POST['email']);
$name=mysqli_real_escape_string($conn,$_POST['title']);
$domain=mysqli_real_escape_string($conn,$_POST['domain']);
$sql="INSERT INTO androiddev(email,name,domain) VALUES('$mail','$name','$domain')";
if(mysqli_query($conn,$sql))
{
  header('Location:index.php');
}
else {
  echo "error";
}

}

//POST

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('header.php'); ?>
  <h1><center>WE ARE DEVELOPERS</center></h1>
  <section class="container grey-text">
		<h4 class="center">Employee details </h4>
		<form class="white" action="work.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email">
			<label>Your name</label>
			<input type="text" name="title">
			<label>Domain Expertise</label>
			<input type="text" name="domain">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-8">
			</div>
		</form>
	</section>

  <?php include('footer.php'); ?>
</html>
