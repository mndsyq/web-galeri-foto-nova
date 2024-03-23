<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- /Bootstrap -->

    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- /Icon -->


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Urbanist&display=swap" rel="stylesheet">
    <!-- /Font -->

    <link rel=" stylesheet" href="css/komentar.css">
    <title>Komen</title>
</head>

<body>

     <!-- navbar -->
     <nav class="navbar navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand logona" style="font-size: 30px;;" href="#"><b><i>NApict</i></b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-8" id="navbarSupportedContent">
                    <form action="#" class="d-flex my-3 me-auto" style="margin-left:300px;"> 
                        <input class="search_foto form-control " type="search" placeholder="Cari gambar" aria-label="Search">
                        <button class="icon_search_foto btn btn-outline-success" type="submit">
                            <ion-icon class="bi bi-search" name="search-outline"></ion-icon>
                        </button>
                    </form>
                    <div class="dropdown me-2">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="gambar/profil.png" alt="profil" class="profil-img rounded-circle img-fluid">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="profileuser">Profil</a></li>
                        <li><a class="dropdown-item" href="admin/album.php">Album</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>

                </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- end navbar -->
    <!-- Main -->
    <main>

        <div class="container">
            <div class="row">
                <div class="offset-2 col-8">
                    <div class="card" style="width: 100%;">
                        <img src="gambar/g1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex  justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/profil.png"></a> <small class="txt_small ms-2">Lubis</small>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2 d-flex align-items-center">
                                        <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                    </div>
                                    <div class="me-2 d-flex align-items-center">
                                        <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                    </div>
                                </div>
                            </div>

                            <div class="mx-4 ps-2">
                                <h5 class="card-title">Judul Foto</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="offset-1 col-10">
                                <h6>Komentar</h6>
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/profil.png"></a> <small class="txt_small ms-2">Nova</small>
                                <p class="card-text ps-4 mx-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div class="row d-flex my-4">
                                <div class="d-flex justify-content-center">
                                    <a href="#"><img class="gambaaar rounded-circle object-fit-cover my-1" src="gambar/profil.png"></a>
                                    <input class="komentar form-control ms-2" type="" placeholder="Tambahkan Komentar" aria-label="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="txt_h mt-5 text-center">Jelajahi lainnya</h3>

            <div class="row_gbr row g-4 ">
                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="Komentar.php"><img class="object-fit-cover gbr_objek" src="gambar/g1.png"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/profil.png"></a> <small class="txt_small ms-2">Nova Lubis</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/g1.png"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/profil.png"></a> <small class="txt_small ms-2">Nova Lubis</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/g1.png"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/profil.png"></a> <small class="txt_small ms-2">Nova Lubis</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 justify-content-start">
                    <div class="">
                        <a href="foto.php"><img class="object-fit-cover gbr_objek" src="gambar/g1.png"></a>
                    </div>
                    <div>
                        <div class="d-flex mt-2 justify-content-between">
                            <div class="d-flex justify-content-start">
                                <a href="profil.php"><img class="gbr4 rounded-circle object-fit-cover" src="gambar/profil.png"></a> <small class="txt_small ms-2">Nova Lubis</small>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-eye icooon" name="eye-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-heart icooon" name="heart-outline"> </ion-icon><small class="s_icon">10k</small>
                                </div>
                                <div class="me-2 d-flex align-items-center">
                                    <ion-icon class="bi bi-share icooon" name="share-outline"></ion-icon><small class="s_icon">10k</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: grey;">
            Copyright©:
            <a class="text-white" href="">UKK RPL-3 2024 | Nova Lubis</a>
        </div>
        <!-- Copyright -->
            </div>
        </div>
         <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var heartIcons = document.querySelectorAll('.heart-icon');


            heartIcons.forEach(function (icon) {
                icon.addEventListener('click', function () {

                    this.classList.toggle('bi-balloon-heart');
                    this.classList.toggle('bi-balloon-heart-fill');

                    if (this.classList.contains('bi-heart-fill')) {
                        this.style.color = 'red';
                    } else {
                        this.style.color = '';
                    }
                });
            });
        });
    </script>





    </main>
    <!-- /Main -->
</body>

</html