<?php
include "inc/admin_header.php";
?>
<div class="content-wrapper">
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
 <div class="row">
          <div class="col-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">College Reviews-अविरल-365</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <!--text-success for Approved,text-warning for Pending,text-danger for denied and others bootstrap color codes-->
                      <td><span> <i class="nav-icon fas fa-circle text-success"></i></span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                      <td><span>  <div class="btn-group">
                    <button type="button" class="btn btn-warning">Action</button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">Action</a>
                      
                      </div>
                    </button></div></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
          <!-- Left col -->
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>























<?php
  include "inc/admin_footer.php";
  ?>
