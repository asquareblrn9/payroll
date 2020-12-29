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
  <link href="../assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
   <link href="../assets/css/buttons.dataTables.min.css" rel="stylesheet" />
    
 <script src="assets/js/jquery-3.3.1.js"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="payslip">
              <i class="fa fa-check-circle"></i>
              <p>Generate Pay Slip</p>
            </a>
          </li>
          <li >

            <a class="nav-link" href="#" class="dropdown-menu" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">content_paste</i>
              <p>Payroll Reports</p>
            </a>

            <ul class="dropdown-menu">
              <li><a class="nav-link" href="monthly" target="_blank">Monthly</a></li>
              
              <li><a class="nav-link" href="single" target="_blank">Monthly Individual</a></li>

              <li><a class="nav-link" href="yearly_one.php" target="_blank">Yearly Individual</a></li>

              <li><a class="nav-link" href="monthly_all" target="_blank">Monthly Breakdown</a></li>

              <li><a class="nav-link" href="yearly_all" target="_blank">Yearly Breakdown</a></li>

              
            </ul>

            
          </li>


        <li >

            <a class="nav-link" href="#" class="dropdown-menu" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">content_paste</i>
              <p>Tax Reports</p>
            </a>

            <ul class="dropdown-menu">
         

              <li><a class="single" href="monthly_tax" target="_blank">Monthly Breakdown</a></li>

              <li><a class="single" href="yearly_tax" target="_blank">Yearly Breakdown</a></li>

              
            </ul>

            
             
           
          </li>



<li >

            <a class="nav-link" href="#" class="dropdown-menu" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">content_paste</i>
              <p>Pension Reports</p>
            </a>

            <ul class="dropdown-menu">
             
              <li><a class="single" href="monthly_pension" target="_blank">Monthly Breakdown</a></li>

              <li><a class="single" href="yearly_pension" target="_blank">Yearly Breakdown</a></li>

              
            </ul>

            
          </li>

<!--
<li >

            <a class="nav-link" href="#" class="dropdown-menu" data-toggle="dropdown" role="menu" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">content_paste</i>
              <p>Loan Reports</p>
            </a>

            <ul class="dropdown-menu">
              

              <li><a class="single" href="monthly_loan" target="_blank">Monthly Breakdown</a></li>

              <li><a class="single" href="yearly_loan" target="_blank">Yearly Breakdown</a></li>

              
            </ul>

          </li>

!-->
                 
          <li class="nav-item ">
            <a class="nav-link" href="changepassword">
              <i class="fa fa-key"></i>
              <p>Change Password</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="logout">
              <i class="fa fa-sign-out "></i>
              <p>Loggout</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            
          </div>
        </div>
      </nav>