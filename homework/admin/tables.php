<?php include'security.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Five Star Essays</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
 <?php include'navbar.php' ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Users</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Status</th>
                 
                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Status</th>
                </tr>
              </tfoot>
                  <tbody>
                  <?php
                         include 'connect.php';

            // $user = $_SESSION['email'];
            $sql = "SELECT * FROM users ";
            $result= mysqli_query($db,$sql) or die(mysqli_error($db));

            while($row= mysqli_fetch_row($result))
            {
                 $id = $row[0];
                // $link = "check.php?id=$id";
                // $link2 = "delete.php?id=$id";
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
             echo "<td>$row[4]</td>";
                echo "</tr>";
                // echo "<td><a href='$link' class='btn btn-primary' >Mark as done</a></td>";
                // echo "<td><a href='$link2' class='btn btn-danger'>Delete</a></td>";
                //echo "<td><a href='$link2'></a></td>";
            }

        ?>
                
              </tbody>
            </table>
          </div>
        </div>
         <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Jobs</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Topic</th>
                  <th>Category</th>
                  <th>Due date</th>
                  <th>Pages</th>
                  <th>Description</th>
                  <th>Style</th>
                  <th>Status</th>
                  
                  <th></th>
              </thead>
              <tfoot>
                <tr>
                <th>Id</th>
                 <th>Name</th>
                  <th>Email</th>
                  <th>Topic</th>
                  <th>Category</th>
                  <th>Due date</th>
                  <th>Pages</th>
                  <th>Description</th>
                  <th>Style</th>
                  <th>Status</th>
                  
                </tr>
              </tfoot>
                  <tbody>
                <?php

            include 'connect.php';

            // $user = $_SESSION['email'];
            $sql1 = "SELECT * FROM projects ";
            $result1= mysqli_query($db,$sql1) or die(mysqli_error($db));

            while($row1= mysqli_fetch_row($result1))
            {
                 $id = $row1[0];
                // $link = "check.php?id=$id";
                // $link2 = "delete.php?id=$id";
                echo "<tr>";
                echo "<td>$row1[0]</td>";
                echo "<td>$row1[1]</td>";
                echo "<td>$row1[2]</td>";
                echo "<td>$row1[3]</td>";
                echo "<td>$row1[4]</td>";
                echo "<td>$row1[5]</td>";
                echo "<td>$row1[6]</td>";
                echo "<td>$row1[7]</td>";
                echo "<td>$row1[8]</td>";
                 echo "<td>$row1[9]</td>";
                echo "</tr>";
                // echo "<td><a href='$link' class='btn btn-primary' >Mark as done</a></td>";
                // echo "<td><a href='$link2' class='btn btn-danger'>Delete</a></td>";
                //echo "<td><a href='$link2'></a></td>";
            }

        ?>
 
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include'footer.php' ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
