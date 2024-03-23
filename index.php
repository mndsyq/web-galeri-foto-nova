<?php
include 'config/koneksi.php';
session_start();
$userid = isset($_SESSION['userid']) ? $_SESSION['userid'] : 0;
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FLICKITY(carousel) -->
    <link rel="stylesheet" href="https://unpkg.com?flickity@2/dist/flickity.min.css">
    <link rel=" stylesheet" href="css/nova.css">

    <!--Icon-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--Icon-->

    <title>Galeri</title>
</head>

<body>
    <!-- navbar -->

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand logona" href="#"><b><i>NApict</i></b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto pt-4">
                        <li class="nav-item">
                            <div class="h-search-form d-flex align-items-center">
                                <form action="d-flex ukur" role="search" method="_POST">
                                    <input class="form-control form-control" type="search" placeholder="Cari gambar" aria-label="Search" id="search">
                                    <button class="search-btn"><ion-icon name="search-outline"></ion-icon></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                    <?php
                    if (empty($_SESSION['userid'])) { ?>
                    <div class="d-flex align-items-center">
                        <a href="login.php" class="btn me-2 msk"><b>Masuk</b></a>
                        <a href="register.php" class="btn bg-black text-white msk">Daftar</a>
                    </div>
                    <?php } else { ?>
                        <div class="dropdown me-2">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="gambar/profil.png" alt="profil" class="profil-img">
                </a>
                <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="profileuser.php">Profil</a></li>
                    <li><a class="dropdown-item" href="admin/album.php">Album</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
                 <?php   } ?>
                </div>
            </div>
        </nav>

        <!-- end navbar -->
        <div class="container-fluid">
            <div class="container">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="gambar/gb3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/gb4.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="gambar/gb5.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Container -->
        <div class="container">
            <div class="col-lg-12">
                <form action="" method="post">
                    <div class="text-center my-5">
                        <div class="txt_kategori">Kategori</div>
                        <h2 class="txt_h">Siap Jelajahi Seluruh Negeri</h2>
                    </div>
                    <div class="row ukuran g-4">
                        <div class="col-3">
                            <div class="kategori">
                                <a href="kategori.php">
                                <img src="gambar/gbr1.png" class="gambar">
                                <p>Gunung</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="kategori">
                                <a href="kategori.php">
                                <img src="gambar/lautan.png" class="gambar">
                                <p>Lautan</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="kategori">
                                <img src="gambar/danau.png" class="gambar">
                                <p>Danau</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="kategori">
                                <img src="gambar/sawah.png" class="gambar">
                                <p>sawah</p>
                            </div>
                            </div>
                    </div>
                </form>

                <h3 class="txt_h text-center my-5">Inspirasi Foto</h3>

                <div class="row g-4 my-1">

                    <div class="col-3">
                        <!-- gambar galeri -->
                        <a href ="komentar.php?FotoID=<?= $data['FotoID']?>">
                        <img class="poto-galeri object-fit-over img-fluid" src="gambar/<?= $data['LokasiFile']?>">
                    </a>
                    <div class="d-flex align-items-center justify-content-between mt-1 mb-4">
                        <a href="profil.php?userid=<?= $data['userid']?>" class="text-decoration-none"><small
                        class="fw-bold text-black"><?php echo $data['username']?></small></a> <!-- nama pengguna -->
                    </div> 
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                                <span class="ms-auto">
                                </span>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline "></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="">
                            <img src="gambar/g1.png" class="object-fit-cover gbr3">
                        </div>
                        <div class="d-flex mt-1 justify-content-between">
                            <div class="d-flex">
                                <img src="gambar/profil.png" class="object-fit-cover gbr5 rounded-circle">
                                <small class="txt_kecil d-flex ms-1">Nova Lubis</small>
                            </div>
                            <div class="d-flex">
                                <div class="me-2 d-flex">
                                    <ion-icon name="heart-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="chatbubble-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex">
                                    <ion-icon name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Container -->

        <div class="container-fluid py-3 text-center border ">
            <h4>Gabung Untuk Menjadi Kontributor</h4>
            <p>Jelajahi Dunia Sampai Batasanmu</p>
            <div class="text-center">
                <a href="#" class="btn bg-black text-white my-auto">Gabung Sekarang</a>
            </div>
        </div>

        <!--footer-->
        <footer>
            <div class="container-fluid">
                <div class="container">
                    <div class="row g-3 ">
                        <div class="col mt-5">
                            <h1 class="logo1"> <i>NApict</i>
                                </span></h1>
                        </div>
                        <div class="col my-4">
                            <p>Menjadi media promosi
                                keindahan alam seluruh dunia</p>
                            Kontak Kami
                            <p>Alamat:
                                Jl. Klambir Lima
                            </p>
                        </div>
                        <div class="col my-5">
                            <p>Phone : 0812-6256-2307<br>
                                lubisnova7@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: grey;">
            Copyright©:
            <a class="text-white" href="">UKK RPL-3 2024 | Nova Lubis</a>
        </div>
        <!-- Copyright -->
        <!--footer-->
    </body>
</body>

</html>