
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
                </div>
                <div class="navbar-nav me-auto">
                    <a href="album.php" class="nav-link">Album</a>
                </div>
                    <div class="d-flex align-items-center">
                    div class="dropdown me-2">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="gambar/lautan.png" alt="profil" class="profil-img">
                </a>
                <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
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




         <!-- Copyright -->
         <div class="text-center text-white p-3" style="background-color: grey;">
            Copyright©:
            <a class="text-white" href="">UKK RPL-3 2024 | Nova Lubis</a>
        </div>
        <!-- Copyright -->
        </body>
</body>

</html>
