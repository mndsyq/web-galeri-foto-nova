<?php
include "../config/koneksi.php";
session_start();

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

    <title>Masuk Ke Album</title>
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

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="navbar-nav me-auto">
                    <a href="album.php" class="nav-link">Album</a>
                </div>
                        <div class="dropdown me-2">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="../gambar/profil.png" alt="profil" class="profil-img">
                </a>
                <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="../profileuser.php">Profil</a></li>
                    <li><a class="dropdown-item" href="../admin/album.php">Album</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
                     </div>
                </div>
            </div>
        </nav>

        <!-- end navbar -->

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                 <div class="card mt-2">
                    <div class="card-header">Tambah Album</div>
                    <div class="card-body">
                        <form action="../config/aksi_album.php" method="POST"></form>
                        <label class="form-label">Nama Album</label>
                        <input type="text" name="namaalbum" class="form-control" required>
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" required></textarea>
                        <button type="submit" class="btn btn-primary mt-2" name="tambah">
                            Tambah Data</button>

                    </div>
                 </div>
                </div>
                    <div class="col-md-8">
                        <div class="card mt-2">
                            <div class="card-header">Data Album</div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>#</th>   
                                        <th>Nama Album</th> 
                                        <th>Deskripsi</th> 
                                        <th>Tanggal</th> 
                                        <th>Aksi</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $userid = $_SESSION['userid'];
                                        $sql = mysqli_query($koneksi, "SELECT * FROM album 
                                        WHERE userid='$userid'");
                                        while($data = mysqli_fetch_array($sql)){
                                            ?>                                      
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['namaalbum'] ?></td>
                                            <td><?php echo $data['deskripsi'] ?></td>
                                            <td><?php echo $data['tanggalbuat'] ?></td>
                                            <td>
                                               
<button type="button" class="btn btn-primary"
 data-bs-toggle="modal" data-bs-target="
 #edit<?php echo $data['albumid'] ?>">
  Edit
</button>


<div class="modal fade" id="edit<?php echo $data['albumid'] ?>" 
tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../config/aksi_album.php"[method="POST">
        <input type="hidden" name="albumid" value="<?php echo
        $data['albumid'] ?>">
                        <label class="form-label">Nama Album</label>
                        <input type="text" name="namaalbum" value="<?php echo 
                        $data ['namaalbum'] ?>" class="form-control" required>
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" required>
                            <?php echo $data['deskripsi']; ?>
                        </textarea>
      
      </div>
      <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-primary">Edit date
                </button>
                </form>
      </div>
    </div>
  </div>
                                        </div>

<button type="button" class="btn btn-danger "
 data-bs-toggle="modal" data-bs-target="
 #Hapus<?php echo $data['albumid'] ?>">
  Hapus
</button>


<div class="modal fade" id="Hapus<?php echo $data['albumid'] ?>" 
tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../config/aksi_album.php"[method="POST">
        <input type="hidden" name="albumid" value="<?php echo
        $data['albumid'] ?>">
        Apakah Anda Yakin Akan Menghapus Data <strong> <?php echo $data['namaalbum'
        ] ?> </strong> ?
                        
      
      </div>
      <div class="modal-footer">
                <button type="submit" name="hapus" class="btn btn-primary">Hapus Data
                </button>
                </form>
      </div>
    </div>
  </div>
</div



                                        </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
