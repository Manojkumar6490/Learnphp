<?php
//array --> collection of data
//multidimensional  array
//include('work.php');
//connection to a database
//interface
//mysqli
$conn=mysqli_connect('localhost','ramkumar','ramkumar@1234','developer');
if(!$conn)
{
  echo "error".mysqli_connect_error;
}
$sql='SELECT email,name,domain from androiddev';
$res=mysqli_query($conn,$sql);
$engg=mysqli_fetch_all($res,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('header.php'); ?>
  <h1><center>WE ARE DEVELOPERS</center></h1>
  <h4 class="center grey-text">Engineers</h4>
  <div class="container">
  <div class="row">
    <?php foreach ($engg as $en) { ?>
      <div class="col s6 md3">
        <div class="card z-depth-0">
          <div class="card-content-center">
            <h6>
              <?php echo htmlspecialchars($en['name']);?>
            </h6>
            <div class="card-content-center">
              <?php echo htmlspecialchars($en['email']);?>
            </div>
            <div class="card-content-center">
              <?php echo htmlspecialchars($en['domain']);?>
            </div>
          </div>
          </div>

        </div>
      <?php }; ?>

      </div>

  </div>

</div>

  <?php include('footer.php'); ?>
</html>
