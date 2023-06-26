<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Kartika Sari</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Kartika Sari</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/karti.PNG" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Kartika 
                        <span class="text-primary">Sari</span>
                    </h1>
                    <?php 
                    include 'koneksi.php';
                   
                    $data = mysqli_query($koneksi,"select * from about");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <div class="subheading mb-5">
                    <?php echo $d['alamat']; ?>
                        <a href="mailto:name@email.com"><?php echo $d['email']; ?>|<?php echo $d['kontak']; ?></a>
                    </div>
                    <p class="lead mb-5"><?php echo $d['deskripsi']; ?></p>
                </div>
                <?php 
                        }
                        ?>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <?php 
                    include 'koneksi.php';
                   
                    $data = mysqli_query($koneksi,"select * from pengalaman");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $d['posisi']; ?></h3>
                            <div class="subheading mb-3"><?php echo $d['perusahaan']; ?></div>
                            <p><?php echo $d['deskripsi']; ?></p>
                        </div>
                        <!-- <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div> -->
                    </div>
                <?php 
                    }
                    ?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <?php 
                    include 'koneksi.php';
                   
                    $data = mysqli_query($koneksi,"select * from pendidkan");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $d['nama']; ?></h3>
                            <div class="subheading mb-3"><?php echo $d['nama']; ?></div>
                          
                            <!-- <p>GPA: 3.23</p> -->
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?php echo $d['dari']; ?></span></div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
