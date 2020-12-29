<?php
include('memtop.php');
?>



 <div class="content" style="margin-top: 150px;">
        <div class="container-fluid">
          
          
          <div class="text-danger text-center"><h3>FILL ALL COLUMN</h3></div>
       
<?php
            
if (isset($_POST['submit'])){

  // A new user has been entered
  // using the form below.
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$date = $_POST['date'];
$date= mysqli_real_escape_string($conn,$date);

$coy_name = $_POST['coy_name'];
$coy_name= mysqli_real_escape_string($conn,$coy_name);


$subject = $_POST['subject'];
$subject= mysqli_real_escape_string($conn,$subject);


$message = $_POST['message'];
$message= mysqli_real_escape_string($conn,$message);
  
     if (!$subject){ 

       $s = 0;
     
     goto read1;


}

  
  
       if (!$message){ 

       $m = 0;
     
     goto read2;



}

  

  
  $sql = "INSERT INTO msg SET date='$date', coy_name='$coy_name', subject='$subject',message='$message'";
  if (@mysqli_query($conn,$sql)) {
    echo '<div class="alert alert-success">Message sent successfully</div>';
  } else {
    echo '<p>Error Sending Message: ' .
         mysql_error() . '</p>';
  }

    
      
      
                    

if($s = 0)

{

read1:
echo'<div class="text-danger">Please Enter the Subject</div>'. '<br><br>';

}



    
if($m = 0)

{

read2:
echo'<div class="text-danger">Please Enter the Message</div>'. '<br><br>';

}

}
?> 
               
<form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col">
      <input type="text" name="date" class="form-control" readonly="readonly" value="<?php echo date("l, F dS Y."); ?>" />
    </div>



    <div class="col">
      <input type="text" name="coy_name" class="form-control" readonly="readonly" value="<?php echo $fullname; ?>">
    </div>

</div>

<div class="row">
<div class="col-sm">
	
	<input type="text" name="subject" class="form-control" placeholder="Subject">
</div>
</div>
<div class="row">
<div class="col">
  <label for=message> Typre in your Message here</label>
<textarea name="message" class="form-control" placeholder="Type your message here">
  
</textarea>

</div>
</div>



<input type="submit" name="submit" class="btn btn-danger" value="Contact Us">


</form>
</div>
</div>
<script>

$('#text').fadeOut().delay(2000).fadeOut();
</script>


<?php
include('memdown.php');
?>