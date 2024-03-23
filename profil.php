<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profil.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Profil</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand logona" style="font-size: 30px;;" href="#"><b><i>NApict</i></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex align-items-center">
                <a href="register.php" class="btn me-2 msk"><b>Masuk</b></a>
                <div class="dropdown me-2">
                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="gambar/profil.png" alt="profil" class="profil-img">
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
    </nav>

    <!-- end navbar -->

    </div>

    </nav>

    <div class="container-fluid profile">
        <div class="row profile-info">
            <div class="col-4 text-center">
                <!-- Image container -->
                <div class="image-container" style="text-align: center;">
                    <img src="gambar/profil.png" alt="Profile" class="profil-img1">
                </div>
            </div>
            <div class="col-8">
                <!-- Text container -->
                <div class="text-container">
                    <h2 class="judul"><i><b>NApict</b></i></h2>
                    <p class="nama-lengkap">Nova Erina Khairani Lubis</p>
                    <p class="email">lubisnova7@gmail.com</p>
                    <p>Jl. Klambir Lima </p>
                </div>
            </div>
        </div>
        <div class="row profile-posts">
            <div class="col-4 gambar">
                <img src="gambar/sawah.png" alt="Post 1">
            </div>
            <div class="col-4 gambar">
                <img src="gambar/sawah.png" alt="Post 2">
            </div>
            <div class="col-4 gambar">
                <img src="gambar/sawah.png" alt="Post 3">
            </div>
            <div class="col-4 gambar">
                <img src="gambar/sawah.png" alt="Post 3">
            </div>
            <div class="col-4 gambar">
                <img src="gambar/sawah.png" alt="Post 3">
            </div>
            <div class="col-4 gambar">
                <img src="gambar/sawah.png" alt="Post 3">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title mx-auto" id="exampleModalLabel">Edit Profil</h5>
                </div>
                <div class="modal-body">
                    <form id="addFotoForm">
                        <div class="mb-3 addfoto d-flex justify-content-center">
                            <label for="gambar"><img src="src/add.png" alt="add" id="gambar-preview"></label>
                            <input id="gambar" type="file" accept="image/*">
                        </div>
                        <div class="text-center mb-3">
                            <label for="gambar" class="text-decoration-underline text-primary fw-light">
                                <h4 class="pb-1">Ganti Foto</h4>
                            </label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="albumName" placeholder="Nama anda" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="albumName" placeholder="Nama lengkap" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="albumName" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="albumDescription" placeholder="Alamat" rows="2"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="editProfile"> Edit </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-5 .footer">
        <footer class="text-center text-lg-start" style="background-color: #DC3535;">
            <div class="text-center text-white p-3" style="background-color: grey;">
                Copyright©:
                <a class="text-white" href="">UKK RPL-3 2024 | NovaLubis</a>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        document.getElementById("gambar").addEventListener("change", function() {
            const file = this.files[0]; // Mendapatkan file yang dipilih oleh pengguna
            if (file) {
                const reader = new FileReader(); // Membuat objek FileReader
                reader.onload = function(e) {
                    document.getElementById("gambar-preview").setAttribute("src", e.target.result); // Menyetel atribut src dari elemen img dengan gambar yang dipilih
                    document.querySelector(".addfoto h2").style.display = "none";
                }
                reader.readAsDataURL(file); // Membaca file sebagai URL data
            }
        });
    </script>
</body>

</html>