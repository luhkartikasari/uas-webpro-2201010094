<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Kartika Sari</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-danger bg-danger">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Kartika Sari</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                               Pendidkan
                            </a>
                            <a class="nav-link" href="pengalaman.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Pengalaman
                            </a>
                            <a class="nav-link" href="tentang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tentang
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pendidikan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Pendidikan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pendidikan
                                
                            </div>
                            <div class="card-body">
                            <?php 
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi,"select * from pendidkan where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                            <form  method="post" action="merubah.php" enctype="multipart/form-data">
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Sekolah</label>
                                <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']; ?>"  required>
                                <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>" placeholder="Nama Sekolah" required>
                                
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" name="dari" value="<?php echo $d['dari']; ?>"  required>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" value="<?php echo $d['sampai']; ?>" name="selesai" required>
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <a href="index.php" class="btn btn-secondary">Batal</a>
                            </form>
                            <?php 
                        }
                        ?>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Kartika Sari</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
