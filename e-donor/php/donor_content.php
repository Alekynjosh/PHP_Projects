<title>e-donor | Donor Dashboard</title>
<style>
  .update-form {
    width: 50%;
  margin: 0px auto;
  padding: 10px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
  }
</style>
<h3 class="text-center">Welcome Donor <?php echo $_SESSION['username']; ?></h3>
<hr  width="75%">

<div class="container text-center">
	<h4>Please Set your Availability</h4>
  <form method="post" class="form">
  <input type="radio" name="g" value="Available">Availabe
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="g" value="Not Available">Not Available
  <br><br>
  <input type="submit" name="availsubmit" value="Submit" class="btn btn-info">
</form>
<?php 
  $myname = $_SESSION['username'];
  $constname = $_SESSION['name'];
//Submitting Availability Status
if (isset($_POST['availsubmit'])) {
      $status = $_POST["g"];
    
      
      $sqlstatus = 'UPDATE donor SET available=" '.$status.' " WHERE `username`="'.$myname.'"' ;

    if (mysqli_query($db, $sqlstatus)) {
        echo "Your status has been successfully updated to <b>".$status. "</b>, ".$myname;
      } 
      else {
          echo "Error updating record: " . mysqli_error($db);
      }

  }
  
 ?>
</div>
<hr>

<div class="header text-center">
    <h2>Update Details</h2>
  </div> 
    <?php 
      $sqldetails = "SELECT name, phone, username, weight, county, subcounty FROM donor WHERE (username = '$myname')";
    $result = $db-> query($sqldetails);
     ?>
     <?php if ($result-> num_rows > 0): ?>
       <?php while ($row = $result-> fetch_assoc()) { ?>
        <form method="post" class="update-form">
    <!-- Display the error messages here-->
      <?php include('errors.php'); ?>

  <div class="form-group">
    <label><h4>Name</h4></label>
    <input type="text" class="form-control" contenteditable="false" name="donor_name" value="<?php echo $row["name"]; ?>">
  </div>
  
  <div class="form-group">
    <label><h4>Username</h4></label>
    <input type="text" class="form-control" name="donor_username" value="<?php echo $row["username"]; ?>">
  </div>

  <div class="form-group">
    <label><h4>Phone</h4></label>
    <input type="text" class="form-control" name="donor_phone" value="<?php echo $row["phone"]; ?>">
  </div>

  <div class="form-group">
    <label><h4>Weight</h4></label>
    <input type="text" class="form-control" name="donor_weight" value="<?php echo $row["weight"]; ?>">
  </div>

  <div class="form-group">
    <label><h4>County</h4></label>
    <input type="text" class="form-control" name="donor_county" value="<?php echo $row["county"]; ?>">
  </div>

  <div class="form-group">
    <label><h4>Subcounty</h4></label>
    <input type="text" class="form-control" name="donor_subcounty" value="<?php echo $row["subcounty"]; ?>">
  </div>
  <br>
  <hr class="text-center" width="70%">
  <div class="text-center">
    <button type="submit" name="update" class="btn btn-info">Update</button>
  </div>
  
  
</form>
        <?php } ?>
     <?php endif ?>

<?php 
  if (isset($_POST['update'])) {
    $d_name = mysqli_real_escape_string($db, $_POST['donor_name']);
    $d_uname = mysqli_real_escape_string($db, $_POST['donor_username']);
    $d_phone = mysqli_real_escape_string($db, $_POST['donor_phone']);
    $d_weight = mysqli_real_escape_string($db, $_POST['donor_weight']);
    $d_county = mysqli_real_escape_string($db, $_POST['donor_county']);
    $d_subcounty = mysqli_real_escape_string($db, $_POST['donor_subcounty']);

    if (empty($d_name)) {
      array_push($errors, "*The Name Field is Blank*");
    }
    if (empty($d_uname)) {
      array_push($errors, "*The Username Field is Blank*");
    }
    if (empty($d_phone)) {
      array_push($errors, "*The Phone Field is Blank*");
    }
    if (empty($d_weight)) {
      array_push($errors, "*The Weight Field is Blank*");
    }
    if (empty($d_county)) {
      array_push($errors, "*The County Field is Blank*");
    }
    if (empty($d_subcounty)) {
      array_push($errors, "*The Subcounty Field is Blank*");
    }

    if (count($errors) == 0 ) {
       $sqlupdate = 'UPDATE donor SET username=" '.$d_uname.' ", weight=" '.$d_weight.' ", phone=" '.$d_phone.' " WHERE `username`="'.$myname.'"' ;
       if (mysqli_query($db, $sqlupdate)) {
        echo "Your records have been successfully updated";
      } 
      else {
          echo "Error updating record: " . mysqli_error($db);
      }

    }

  }


 ?>