<?php 
    
    $conn =  mysqli_connect("localhost","root","","healthyricefields");
    $result = mysqli_query($conn, "SELECT * FROM tb_parameter");   

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">



    <script type="text/javascript">
        var auto_refresh = setInterval(
        function () {
           $('#ceknat').load('data/n.php').fadeIn("slow");
         $('#cekpos').load('data/pos.php').fadeIn("slow");
        //    $('#cektds').load('data/tds.php').fadeIn("slow");
        //    $('#cekldr').load('data/ldr.php').fadeIn("slow");
        //    $('#cektime2').load('data/time2.php').fadeIn("slow");
    
        }, 500); // refresh setiap 500 milliseconds
        
    </script>
     
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- PARAMETER N Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               <h4>N</h4></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
<?php  $n = mysqli_query($conn, "SELECT persen_n FROM tb_parameter");  ?>
<?php $row = mysqli_fetch_assoc($n); ?>
                                               <span id="ceknat"><?php  echo $row["persen_n"]; ?></span> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PARAMETER P Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h4>P</h4></div>
<?php  $p = mysqli_query($conn, "SELECT persen_p FROM tb_parameter");  ?>
<?php $row = mysqli_fetch_assoc($p); ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="cekpos"><?php  echo $row["persen_p"]; ?></span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- PARAMETER K Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h4>K</h4></div>
<?php  $k = mysqli_query($conn, "SELECT persen_k FROM tb_parameter");  ?>
<?php $row = mysqli_fetch_assoc($k); ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="cekpos"><?php  echo $row["persen_k"]; ?></span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- MOISTURE Earnings (Monthly) Card Example -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h4>Moisture</h4></div>
<?php  $moisture = mysqli_query($conn, "SELECT persen_kelembapan FROM tb_parameter");  ?>
<?php $row = mysqli_fetch_assoc($moisture); ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="cekpos"><?php  echo $row["persen_kelembapan"]; ?></span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Nilai PH Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h4>Nilai pH</h4></div>
<?php  $nilai_ph = mysqli_query($conn, "SELECT persen_ph FROM tb_parameter");  ?>
<?php $row = mysqli_fetch_assoc($nilai_ph); ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><span id="cekpos"><?php  echo $row["persen_ph"]; ?></span></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                

                    </div>               
                        <span><h3>Data Sebaran Status Unsur Hara dan Tanah </h3></span>
                        <table border="1" cellpadding="10" cellspacing="0">
                            <tr>
                                
                                <th>No</th>
                                <th>N(%)</th>
                                <th>P(%)</th>
                                <th>K(%)</th>
                                <th>Moisture(%)</th>
                                <th>PH(%)</th>
                                <th>Status</th>
                                <th>Datetime</th>
                            </tr>
    
                        <?php while($row = mysqli_fetch_assoc($result)) : ?>                  
                           
                            <tr>
                                <td><?php  echo $row["id_parameter"]; ?></td>
                                <td><?php  echo $row["persen_n"]; ?></td>
                                <td><?php  echo $row["persen_p"]; ?></td>
                                <td><?php  echo $row["persen_k"]; ?></td>
                                <td><?php  echo $row["persen_kelembapan"]; ?></td>
                                <td><?php  echo $row["persen_ph"]; ?></td>
                                <td><?php  echo $row["status"]; ?></td>
                                <td><?php  echo $row["datetime"]; ?></td>
    
                            </tr>
                            
                         <?php endwhile; ?>
                        </table>


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
