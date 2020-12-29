<?php
include('memtop.php');
?>
<div class="content">
       <div class="content" style="margin-top: 150px;">
 <div class="text-danger text-center"><h3>Change Password </h3></div>
<form method="post" enctype="multipart/form-data">

	<?php if (isset($_POST['submitpassword'])):
  
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  
$old_password = $_POST['old_password'];
$old_password= mysqli_real_escape_string($conn,$old_password);

$new_password= $_POST['new_password'];
$new_password= mysqli_real_escape_string($conn,$new_password);

$confirm_new_password = $_POST['confirm_new_password'];
$confirm_new_password= mysqli_real_escape_string($conn,$confirm_new_password);

$user_logged_in = $_SESSION['MM_Username_Member'] ;

  
   if (!$old_password){ 
echo("<font color=red><strong>Error:</strong>Please Fill in your old password </font>". '<br>' . '<a href="javascript:history.go(-1);">Back </a>');
exit;}
   
     if (!$new_password){ 
echo("<font color=red><strong>Error:</strong>Please Fill in your new password </font>". '<br>' . '<a href="javascript:history.go(-1);">Back </a>');
exit;} 

    if (!$confirm_new_password){ 
echo("<font color=red><strong>Error:</strong>Please confirm your new password </font>". '<br>' . '<a href="javascript:history.go(-1);">Back </a>');
exit;} 
   
     if ($new_password != $confirm_new_password){ 
echo("<center><font color=red><strong>Error:</strong>The 2 new passwords you supplied do not match </font>". '<br>' . '<a href="javascript:history.go(-1);">Back and try again</a></center>');
exit;} 
   
       if ( ($old_password == $new_password) && ($new_password == $confirm_new_password) ){ 
echo("<div class='alert alert-danger'>The new password you supplied seems not to be different from the old one. <br/>They are the same. <br/> Are you sure you really want to change your password? ". '<br>' . '<a href="javascript:history.go(-1);">Back and try again</a></div>');
exit;} 
   
   
 $checkExistence = "SELECT password FROM member_coy WHERE username = '$user_logged_in' ";

$result = mysqli_query($conn,$checkExistence) or die(mysqli_error($conn));
$numRows = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result)) {
   $retrieved_password = $row['password'] ;
    
  } 
     if ($old_password  == $retrieved_password ){ 
	 


$update_query = "UPDATE member_coy SET password=" . '\'' .  $new_password. '\'' . "WHERE username  ='$user_logged_in' ";

$update_query_result = mysqli_query($conn,$update_query ) or die(mysqli_error($conn));


if (@$update_query_result) {
   echo '<div class="alert alert-success">Your password has been changed successfully, You can login again to confirm it. Thank you' . '<a href="logout.php">Log out</a></div>';
  } else {
   echo '<p>Error Changing Password: ' .
        mysql_error() . '</p>';
 }


}//closes d if ($old_password  == $retrieved_password )
 
  else {
  
 echo '<div class="alert alert-danger">Sorry! The old password does not match the one in our Record' . '<a href="javascript:history.go(-1);"> Try again </a></div>' ;
} 


?>
 <?php else: // do nothing ?>
      <?php endif; ?>

  <div class="row">
    


    <div class="col">
      <input type="password" name="old_password" class="form-control" placeholder="Previous Password"  >
    </div>
</div>

<div class="row">

<div class="col">
      <input type="password" name="new_password" class="form-control" placeholder="New Password"  >
    </div>


    <div class="col">
      <input type="password" name="confirm_new_password" class="form-control" placeholder="Confirm New Password"  />
    </div>

</div>
<input type="submit"  name="submitpassword" value="Change Password" class="btn btn-warning">
        </div>
    </div>
</form>


    <?php
include('memdown.php');
?>