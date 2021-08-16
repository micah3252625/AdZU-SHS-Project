<?php
  session_start();

  include("php-scripts/connect.php");
  include("php-scripts/check-login.php");

  $user_data = check_login($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AdZU SHS Database - Dashboard</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .show-profile {
            all: unset;
            cursor: pointer;
            color: rgb(200, 0, 0);
            transition: 0.5s all;
        }
        .show-profile:hover {
            color: rgb(34, 139, 34);
            text-decoration: underline;
        }
        .padding-r {
            padding-right:0;
        }
        .padding-l {
            padding-left:0;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="img/adzu_seal.png" alt="" width="50">
                </div>
                <div class="sidebar-brand-text mx-2">AdZU SHS Database</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage
            </div>

            <!-- Nav Item - Charts -->
            
            <li class="nav-item">
                <button type="button" style="all: unset; cursor: pointer" data-bs-toggle="modal" data-bs-target="#addStudent">
                    <?php 
                        if ($user_data['office'] == 'Admissions'){
                        echo "<a class='nav-link' href='#''>
                            <i class='fas fa-fw fa-user-plus'></i>
                            <span>Add Student</span></a>";
                        }
                    ?>
                </button>
                     <!-- Modal -->
            <div class="modal fade" id="addStudent" tabindex="-1" aria-labelledby="addStudent" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="add-student-label">Add a New Student</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 style="font-weight: bold">Student Information</h5>
                        <form action="">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="ID Number" aria-label="ID Number">
                                </div>
                                <div class="col">
                                    <select class="form-control form-select" aria-label="Default select example">
                                        <option selected>Strand</option>
                                        <option value="ABM">ABM</option>
                                        <option value="HUMSS">HUMSS</option>
                                        <option value="STEM">STEM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Middle name" aria-label="Last name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" placeholder="Suffix" aria-label="Suffix">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Contact Number" aria-label="Contact Number">
                                </div>
                            </div>
                            <input type="text" class="form-control mb-3" placeholder="Complete Adress" aria-label="Complete Adress">
                            <select class="form-control form-select mb-4" aria-label="Default select example">
                                <option selected value="" disabled>Scholarship</option>
                                <option value="">N/A</option>
                                <option value="Top 1">Top 1</option>
                                <option value="Top 2">Top 2</option>
                                <option value="Ongpin">Ongpin</option>
                                <option value="Blue Eaglet">Blue Eaglet</option>
                                <option value="FA100">100% Financial Assistance</option>
                                <option value="FA50">50% Financial Assistance</option>
                                <option value="ESC">ESC</option>
                                <option value="DepEd Voucher">DepEd Voucher</option>
                                <option value="Employee Dependent">Employee Dependent</option>
                            </select>
                        </form>
                        <hr>
                        <h5 style="font-weight: bold" class="mt-2">Guardian Information</h5>
                        <form action="">
                            <input type="text" class="form-control mb-3" placeholder="Guardian Complete Name" aria-label="Guardian Complete Name">
                            <input type="text" class="form-control mb-3" placeholder="Guardian Occupation" aria-label="Guardian Occupation">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Contact Number" aria-label="Contact Number">
                                </div>
                            </div>
                            <input type="text" class="form-control mb-3" placeholder="Guardian Complete Address" aria-label="Guardian Complete Address">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
            </li>
           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php $name = $user_data['fname']; echo "$name"; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" id="adzu-db-table">
                    
                    
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">AdZU Senior High School Database</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Database</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Number</th>
                                            <th>Strand</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          $sql = "SELECT id_number, strand, l_name, f_name, s_name, m_name, email, contact FROM students ORDER BY id_number";
                                          $result = $conn-> query($sql);

                                          if ($result->num_rows > 0){
                                            while ($row = $result->fetch_assoc()){
                                              $id = $row['id_number'];
                                              echo "<tr id='open'><td>" . $row['id_number'] . "</td><td>" . $row['strand'] . "</td><td>" . $row['l_name'] ;
                                              if ($row['s_name'] != NULL) {
                                                echo " " . $row['s_name'];
                                              }
                                              echo ", " .  $row['f_name'];
                                              if ($row['m_name'] != NULL){
                                                $mi = substr($row['m_name'], 0, 1);
                                                echo " " . $mi . ".";
                                              }
                                              echo "</td><td>" . $row['email'] . "</td><td>" . $row['contact'] . "</td><td style='text-align: center'><button id='".$id."' class='show-profile' data-bs-toggle='modal' data-bs-target='#studentProfile'> Show Profile </button></td></tr>";
                                            }
                                            echo "</table>";
                                          }else{
                                            echo "0 results";
                                          }
                                        ?>        
                                        <!-- Modal -->
                                        <div class="modal fade" id="studentProfile" tabindex="-1" aria-labelledby="studentProfile" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div></div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 style="font-weight: bold">Student Information</h5>
                                                    <form action="">
                                                        <div class="row mb-3">
                                                            <label for="studen-id" class="col-sm-2 col-form-label padding-r">ID</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-id">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-strand" class="col-sm-2 col-form-label padding-r">Strand</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-strand">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-name" class="col-sm-2 col-form-label padding-r">Name</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-name">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-email" class="col-sm-2 col-form-label padding-r">Email</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="email" class="form-control" id="studen-email">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-address" class="col-sm-2 col-form-label padding-r">Address</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-name">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-contact" class="col-sm-2 col-form-label padding-r">Contact</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-contact">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-scholar" class="col-sm-2 col-form-label padding-r">Scholar</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-scholar">
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <hr>
                                                    <h5 style="font-weight: bold">Guardian Information</h5>
                                                    <form action="">
                                                        <div class="row mb-3">
                                                            <label for="studen-guardian" class="col-sm-2 col-form-label padding-r">Guardian</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-scholar">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-address" class="col-sm-2 col-form-label padding-r">Address</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-address">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-occupation" class="col-sm-2 col-form-label padding-r">Work</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-occupation">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="studen-contact" class="col-sm-2 col-form-label padding-r">Contact</label>
                                                            <div class="col-sm-10 padding-l">
                                                                <input type="text" class="form-control" id="studen-contact">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                </div>
                                                </div>
                                            </div>
                                        </div>                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Logout of this session?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="php-scripts/logout.php">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>