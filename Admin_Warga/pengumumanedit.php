<?php include "koneksi.php"; 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Warga</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Legok <sup>Nangka</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <a class="nav-link" href="tables.php">
                        <span>Tables</span></a>
                    <a href="pengumuman.php" class="nav-link">
                        <span>Pengumuman</span>
                    </a>
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo "<span class='mr-2 d-none d-lg-inline text-gray-600 small'> $_SESSION[username] </span>" ?>
                                <img class="img-profile rounded-circle" src="img/profil.gif">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Tambah Data Baru</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            require_once "koneksi.php";
                            if (isset($_GET['edit'])) {
                                $id = $_GET['edit'];
                                $hasil = mysqli_query($koneksi, "Select * from pengumuman WHERE id_p='$id'");
                                while ($kolom = mysqli_fetch_array($hasil)) { ?>
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">No</label>
                                            <input type="text" hidden name="id_p">
                                            <input type="text" class="form-control" name="no_q" value="<?= $kolom['no']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Pengumuman</label>
                                            <input type="text" class="form-control" name="pengu" value="<?= $kolom['pengumuman']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Yang Melaporkan</label>
                                            <input type="text" class="form-control" name="lapor" value="<?= $kolom['yang_lapor']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Hari</label>
                                            <select class="form-control" aria-label="Default select example" name="hari">
                                                <option <?php echo ($kolom['hari'] == 'Senin') ? "selected":""?>>Senin</option>
                                                <option <?php echo ($kolom['hari'] == 'Selasa') ? "selected":""?>>Selasa</option>
                                                <option <?php echo ($kolom['hari'] == 'Rabu') ? "selected":""?>>Rabu</option>
                                                <option <?php echo ($kolom['hari'] == 'Kamis') ? "selected":""?>>Kamis</option>
                                                <option <?php echo ($kolom['hari'] == 'Jumat') ? "selected":""?>>Jumat</option>
                                                <option <?php echo ($kolom['hari'] == 'Sabtu') ? "selected":""?>>Sabtu</option>
                                                <option <?php echo ($kolom['hari'] == 'Minggu') ? "selected":""?>>Minggu</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Jam</label>
                                            <input type="text" class="form-control" name="jm" value="<?= $kolom['jam']; ?>">
                                        </div>

                                        <button type="submit" class="btn btn-primary" style="float: right;" name="selesai">selesai</button>
                                    </form>
                            <?php
                                }
                            } ?>

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
                        <span>Copyright &copy; Your Website <script>
                                document.write(new Date().getFullYear());
                            </script></span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

<?php
require_once "koneksi.php";
if (isset($_POST['selesai'])) {
    $no = $_POST['no_q'];
    $pengumuman = $_POST['pengu'];
    $lapor = $_POST['lapor'];
    $hari = $_POST['hari'];
    $jam = $_POST['jm'];

    mysqli_query($koneksi, "update pengumuman set no='$no', pengumuman='$pengumuman', yang_lapor='$lapor', hari='$hari', jam='$jam' where id_p='$_GET[edit]'");
    echo "<script>alert ('Berhasil Melaporkan Ulang'); </script>";
    echo "<script>window.location.replace('pengumuman.php');</script>";
}
?>