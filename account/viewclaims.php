<?php
require('memtop.php');
?>
<script>
        function Export()
        {
            var conf = confirm("Export Claims Records to CSV?");
            if(conf == true)
            {
                window.open("export_claims.php", '_blank');
            }
        }
    </script>

<div class="content">
        <div class="container-fluid">

<div class="row">
          
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Bordereau Claims</h4>
                  <p class="card-category">Uploaded claims</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">

<button onClick="Export()" class="btn btn-primary">Export to CSV File</button>
<div class="card">


<table  width="100%" id="example" class="table table-striped table-condensed table-responsive">
        <thead>
        <tr>
        	<th>S/N</th>
        <th>Uploaded date</th>
		<th>Year</th>
        <th>Month</th>
        <th>Coy Name</th>
        <th>Class Code</th>
        <th>Policy No.</th>
        <th>Claims No.</th>
        <th>Insured</th>
        <th>Period of Insurance</th>
        <th>Date of Loss</th>
        <th>Loss Description</th>
        <th>Claims Paid</th>
        <th>Ceedant Paid</th>
        <th>NLIP Paid</th>
        <th>Claim Status</th>
       
        </tr>
        </thead>
        <tbody>
        <?php
        $x=0;
        
		        
        $stmt = $conn->query("SELECT * FROM claim where company_name='$fullname' ORDER BY id DESC");
       		while($row=$stmt->fetch_assoc())
		{
			
        $k = ++ $x;
			
			
			?>
			<tr>
			<td><?php echo $k; ?></td>	
			<td><?php echo $row['todays_date']; ?></td>
			<td><?php echo $row['year']; ?></td>
			<td><?php echo $row['month_ceeded']; ?></td>
            <td><?php echo $row['company_name']; ?></td>
            <td><?php echo $row['class_code']; ?></td>
            <td><?php echo $row['policy_no']; ?></td>
            <td><?php echo $row['claims_no']; ?></td>
            <td><?php echo $row['insured']; ?></td>
            <td><?php echo $row['period_of_insurance']; ?></td>
            <td><?php echo $row['date_of_loss']; ?></td>
            <td><?php echo $row['description_of_loss']; ?></td>
            <td><?php echo $row['claims_paid_all']; ?></td>
            <td><?php echo $row['cedant_amount_paid']; ?></td>
            <td><?php echo $row['nlip_amount_paid']; ?></td>
            <td><?php echo $row['claim_status']; ?></td>

         
			</tr>
			<?php
		}
		?>
        </tbody>
   </table>
</div>
</table>
</div>
</div>
</div>
</div>
</div>
</div>




<?php
require('memdown.php');
?>