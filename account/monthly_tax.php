<?php
require_once('../functions/function.php'); 
require_once('../functions/db.php'); 
$db=new DbCon();
$con = new Payroll();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Account  Central Portal
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="assets/css/twitter-bootstrap4.1.1.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
 <script src="assets/js/jquery-3.3.1.js"></script>
</head>

<body class="">

  <div class="container">
    <div class="card" id="crd">
      <div class="card-body">
    <form  method="post" class="form-group">
     <div class="row">
  <div class="col-md-3">
  
  <select class="form-control" name="months" required>
    <option disabled="disabled" selected="selected" >Select Month</option>
    
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
        

    ?>
  </select>

</div>
<div class="col-md-3">
  <input type="text" name="year" placeholder="Year" required class="form-control">
  </div>

 

<div class="col-md-3">
  <input type="submit" name="add_r" class="btn btn-danger" value="Submit">
  </div>
</div>
    </form>
  </div>
</div>


<?php
if(isset($_POST['add_r']))
{
  $months = $con->escape_string($_POST['months']);
  $year = $con->escape_string($_POST['year']);
  
  $pick=$db->connection->query("SELECT * from sliprecord where month = '$months' and year='$year' GROUP BY employee_code  " );
  if($pick->num_rows > 0)
  {

?>


 <div class="card" style="margin-top: 20px;">
      <div class="card-header">
        <div class="col-md-8 float-left">
        <img src="../assets/img/logo.png" width="150px" height="60px">
      </div>
      

      <div class="card-body">
      <table class="table table-striped table-hover table-bordered" width="100%">

        <thead class="bg-dark" style="color: #ffffff;">
         <tr>
          
          <th>Staff id</th>
          <th>Name</th>
          <th>Category</th>
          <th>P.A.Y.E</th>
          
        </tr>
        </thead>

        <tbody> 
          <?php
while ($row=$pick->fetch_array()) {
  ?>
          <tr>
            <td><?php echo $row['employee_code'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['category'] ?></td>
            <td><?php echo $row['paye'] ?></td>
            
          </tr>
        




  <?php


  
}

$total_paye = $db->connection->query("SELECT sum(paye) paye_total from sliprecord where month = '$months' and year='$year'"); 
$row_total = $total_paye->fetch_assoc();

echo '<tfoot>
<th colspan="3" class="bg-dark" style="color:#ffffff;">Total</th>
<th>'.$row_total['paye_total'].'</th>
</tfoot>

';


echo "<script> $('#crd').hide()</script> ";
?>
</tbody>
 </table>

      </div>

</div>

<?php
 }
 else
 {
  echo 'Nothing dey';
 }



}


?>

   
  </div>






    <?php require_once 'memdown.php'; ?>