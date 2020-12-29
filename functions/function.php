<?php
session_start();
require_once 'db.php';

/**
 * summary
 */
class Payroll extends DbCon
{
    /**
     * summary
     */
   
	 function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }

function login($userid, $password)
{
	$login = $this->connection->query("select username, password from adminstaff where username='$userid' and password='$password' ");
	if($login->num_rows > 0)
    	{
    		while($row=$login -> fetch_assoc())
    		{
    			$emailid = $row['username'];
    		}

    		$_SESSION['user'] = $emailid;
    		
        

    		echo '<script>window.location.replace("account/");</script>';
    		//echo '<script>alert("eku ise")</script>';

    	}
    	else
    	{
    		echo '<div class="alert alert-danger" id="text-alert"> Wrong username or password </div>';
    	}
}

function PostSlip($months,$year,$basic,$ecode,$names,$cats,$housing,$transport,$lunch,$others,$productivity,$utility,$paye,$pension,$refund,$coop,$car,$personal,$rent,$refurbish,$house,$other_refund,$coop_loan,$total_deduction1,$total_deduction2,$total_deductions,$gross,$netpay)
{
    $date=date('D-M-Y');
$insert = $this->connection->query("INSERT INTO sliprecord(date, month, year, employee_code, name, category, basic, housing, transport, lunch, utility_allowance, other_allowance, productivity, paye, pension, refund_overtime, coop_contribution, car_loan, personal_loan, coop_loan, rent_advance, car_refurbish, housing_mortgage, grosspay, total_deduction1, total_deduction2, total_deduction, netpay)values('$date','$months','$year','$ecode','$names','$cats','$basic','$housing','$transport','$lunch','$utility','$others','$productivity','$paye','$pension','$refund','$coop','$car','$personal','$coop_loan','$rent','$refurbish','$house','$gross','$total_deduction1','$total_deduction2','$total_deductions','$netpay')");

if($insert)
{
    echo '<div class="alert alert-success" id="text-alert"> Payment Posted Successfully </div>';

}
else
{
      trigger_error(mysqli_error($this->connection), E_USER_ERROR);
        echo '<div class="alert alert-warning alert-dismissible" id="text-alert"> Please check your internet and try again </div>';  
}
}



























}
?>