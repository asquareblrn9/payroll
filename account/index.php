<?php
include('memtop.php');
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <?php
                  $total= $db->connection->query("select * from employee");
                  $res= $total -> num_rows;
                  ?>
                  <p class="card-category"><strong>Total Employee</strong></p>
                  <h3 class="card-title"><?php echo $res ?>
                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="viewbordereau">View</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">Total Basic</i>
                  </div>

                  <?php
                  $total1= $db->connection->query("select SUM(basic) from employee");
                  $res1= $total1 -> fetch_array();
                  ?>
                  <p class="card-category"><strong>Total Basic</strong></p>
                  <h3 class="card-title">&#8358;<?php echo $res1['SUM(basic)'] ?></h3>
                </div>
                <div class="card-footer">
                
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-list-alt"></i>
                  </div>
                  <?php
                  $total1= $db->connection->query("select SUM(housing) from employee");
                  $res1= $total1 -> fetch_array();
                  ?>
                  <p class="card-category"><strong>Total Housing</strong></p>
                  <h3 class="card-title">&#8358;<?php echo $res1['SUM(housing)'] ?></h3>
                </div>
                <div class="card-footer">
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline </i>
                    
                  </div>

                  <?php
                  $total1= $db->connection->query("select SUM(productivity) from employee");
                  $res1= $total1 -> fetch_array();
                  ?>
                  <p class="card-category"><strong>Total Productivity</strong></p>
                  <h3 class="card-title">&#8358;<?php echo $res1['SUM(productivity)'] ?></h3>
                </div>
                <div class="card-footer">
                 
                </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-list-alt"></i>
                  </div>
                  <?php
                  $total1= $db->connection->query("select SUM(lunch) from employee");
                  $res1= $total1 -> fetch_array();
                  ?>
                  <p class="card-category"><strong>Total Lunch</strong></p>
                  <h3 class="card-title">&#8358;<?php echo $res1['SUM(lunch)'] ?></h3>
                </div>
                <div class="card-footer">
                  
                </div>
            </div>
          </div>
        </div>

        


          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-stats">
                <div class="card-header card-header-default card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-money"></i>
                  </div>
                  <?php
                  $total1= $db->connection->query("select SUM(utility_allowance) from employee");
                  $res1= $total1 -> fetch_array();
                  ?>
                  <p class="card-category"><strong>Total Utility_Allowance</strong></p>
                  <h3 class="card-title">&#8358;<?php echo $res1['SUM(utility_allowance)'] ?></h3>
                </div>
                <div class="card-footer">
                  
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-stats">
                <div class="card-header card-header-default card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-list-alt"></i>
                  </div>
                  <?php
                  $total1= $db->connection->query("select SUM(transport) from employee");
                  $res1= $total1 -> fetch_array();
                  ?>
                  <p class="card-category"><strong>Total Transport</strong></p>
                  <h3 class="card-title">&#8358;<?php echo $res1['SUM(transport)'] ?></h3>
                </div>
                <div class="card-footer">
                 
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-list-alt"></i>
                  </div>
                  <?php
                  $total1= $db->connection->query("select SUM(other_allowance) from employee");
                  $res1= $total1 -> fetch_array();
                  ?>
                  <p class="card-category"><strong>Total Other Allowance</strong></p>
                  <h3 class="card-title">&#8358;<?php echo $res1['SUM(other_allowance)'] ?></h3>
                </div>
                <div class="card-footer">
                  
                </div>
            </div>
          </div>
        </div>
     
         
        </div>
      </div>
    </div>
      <?php
      include('memdown.php');
      ?>