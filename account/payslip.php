<?php
include('memtop.php');
?>
<div class="content">
        <div class="container-fluid">
        	<?php
        	if(isset($_POST['posting']))
        	{
        		
        		$months=$con->escape_string($_POST['months']);
        		$year = $con->escape_string($_POST['year']);
        		$basic=$con->escape_string($_POST['basic']);
        		$ecode=$con->escape_string($_POST['e_code']);
        		$names=$con->escape_string($_POST['names']);
        		$cats = $con->escape_string($_POST['cats']);
        		$housing=$con->escape_string($_POST['housing']);
        		$transport=$con->escape_string($_POST['transport']);
        		$lunch=$con->escape_string($_POST['lunch']);
        		$others=$con->escape_string($_POST['others']);
        		$productivity=$con->escape_string($_POST['productivity']);

        		$utility=$con->escape_string($_POST['utility']);
        		$paye=$con->escape_string($_POST['paye']);
        		$pension=$con->escape_string($_POST['pension']);
        		$refund=$con->escape_string($_POST['refund']);
        		$coop=$con->escape_string($_POST['coop']);
        		$car=$con->escape_string($_POST['car']);
        		$personal=$con->escape_string($_POST['personal']);
        		$rent=$con->escape_string($_POST['rent']);
        		$refurbish=$con->escape_string($_POST['refurbish']);
        		$house=$con->escape_string($_POST['house']);
        		$other_refund=$con->escape_string($_POST['other_refund']);
        		$coop_loan=$con->escape_string($_POST['coop_loan']);

        		                    
        		
        		$total_deduction1 = $paye+$pension+$coop;
        		$total_deduction2= $car+$personal+$coop_loan+$rent+$refurbish+$house+$other_refund;

        		$gross = $basic+$housing+$transport+$utility+$refund+$others+$productivity;
        		$total_deductions=$total_deduction1 + $total_deduction2;

        		$netpay = $gross - $total_deductions;

        		$con->PostSlip($months,$year,$basic,$ecode,$names,$cats,$housing,$transport,$lunch,$others,$productivity,$utility,$paye,$pension,$refund,$coop,$car,$personal,$rent,$refurbish,$house,$other_refund,$coop_loan,$total_deduction1,$total_deduction2,$total_deductions,$gross,$netpay);





        		

        	}

        	?>

<div class="row">
          
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Generate Pay Slip</h4>
                </div>
                <div class="card-body">
                  
<form method="post">	

<div class="row">
	<div class="col-md-3">
	<?php
$pick="SELECT * FROM employee";
$final = $db->connection->query($pick); 
$fina=$final->fetch_assoc()
	?>
		
	<select class="form-control" name="ids">
		<option disabled="disabled" selected="selected">Select Employee Code</option>
		<?php
		while($finals=$final->fetch_assoc())
		{
			echo
			'<option value='.$finals['employee_code'].'> '.$finals['employee_code'].'
			
		</option>';
		}
		

		?>
	</select>
</div>





<div class="col-md-3">

	<input type="submit" class="btn btn-default" name="fetch" value="Generate">
</div>

</div>

</form>

</div>
</div>


<?php
if(isset($_POST['fetch']) && isset($_POST['ids']))
{
	$id = $con->escape_string($_POST['ids']);
	$all= $db->connection->query("select * from employee where employee_code = '$id'");
	$just = $all->fetch_assoc();	

?>
<!-- new card !-->
<form method="post">
 <div class="card">
 <div class="card-header card-header-danger">
 <h4 class="card-title">Compute Pay Slip</h4>
 </div>
<div class="card-body">
                  
	

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
	
	<input type="text" name="year" placeholder="Year" required="required" class="form-control" value="<?php echo date('Y') ?>">	

</div>

</div>

<div class="row" style="margin-top: 10px;">

<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="e_code" value="<?php echo $id; ?>">
<label >Code</label>
</div>



<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="names" value="<?php echo $just['firstname'].'&nbsp;'.$just['surname']; ?>">
<label >Name</label>
</div>

<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="cats" value="<?php echo $just['category'] ?>">
<label >Category</label>
</div>


<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="basic" value="<?php echo $just['basic']/12; ?>">
<label >Basic</label>
</div>

<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="housing" value="<?php echo $just['housing']/12; ?>">
<label >Housing</label>
</div>


<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="transport" value="<?php echo $just['transport']/12; ?>">
<label >Transport</label>
</div>

<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="lunch" value="<?php echo $just['lunch']/12; ?>">
<label >lunch</label>
</div>


<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="utility" value="<?php echo $just['utility_allowance']/12; ?>">
<label >Utility</label>
</div>

<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="others" value="<?php echo $just['other_allowance']/12; ?>">
<label >Others</label>
</div>

<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="productivity" value="<?php echo $just['productivity']/12; ?>">
<label >Productivity</label>
</div>

<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="paye" value="<?php echo $just['paye']/12; ?>">
<label >PAYE</label>
</div>

<div class="col-md-4">
<input type="text" readonly="readonly" class="form-control" name="pension" value="<?php echo $just['pension']/12; ?>">
<label >Pension</label>
</div>


</div>



</div>
</div>


 <div class="card">
 <div class="card-header card-header-warning">
 <h4 class="card-title">Deductions/Additions</h4>
 </div>
<div class="card-body">
 
<div class="row" style="margin-top: 10px;">

<div class="col-md-4">
<input type="number" value="0"  class="form-control" name="refund" placeholder="Refund/Overtime">
<label >Refund/Overtime</label>
</div>



<div class="col-md-4">
<input type="number" value="0"  class="form-control" name="coop" placeholder="Cooperative Contribution">
<label >Cooperative Contribution</label>
</div>

<div class="col-md-4">
<input type="number"  value="0" class="form-control" name="car" placeholder="Car Loan">
<label >Car Loan</label>
</div>


<div class="col-md-4">
<input type="number" value="0"  class="form-control" name="personal" placeholder="Personal Loan">
<label >Personal Loan</label>
</div>

<div class="col-md-4">
<input type="number" value="0" class="form-control" name="rent" placeholder="Rent Advance">
<label >Rent Advance</label>
</div>


<div class="col-md-4">
<input type="number"  value="0" class="form-control" name="refurbish" placeholder="Car Refurbish" step="any">
<label >Car Refurbish</label>
</div>

<div class="col-md-4">
<input type="number" value="0"  class="form-control" name="house" placeholder="House Mortgage" step="any">
<label >House Mortgage</label>
</div>

<div class="col-md-4">
<input type="number" value="0"  class="form-control" name="coop_loan" placeholder="Cooperative Loan" step="any">
<label >Cooperative Loan</label>
</div>

<div class="col-md-4">
<input type="number" value="0"  class="form-control" name="other_refund" placeholder="Other Deductions" step="any">
<label >Other Deductions</label>
</div>





</div>

<input type="submit" name="posting" class="btn btn-warning" value="POST">


</div>
</div>

</form>

<?php
}
?>
<!-- end of second card !-->



</div>

</div>
</div>
</div>









<?php
      include('memdown.php');
      ?>