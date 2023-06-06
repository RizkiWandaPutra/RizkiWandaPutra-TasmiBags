<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TasmiBags - Aplikasi Penjualan Tas dan sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand navbar-dark bg-primary sticky-top">
        <div class="container-lg">
            <a class="navbar-brand" href="."><i class="bi bi-handbag-fill fs-1-md"></i> Tasmi Bags</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal"data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i> Ubah
                                    Password</a></li>
                            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-right"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Modal edit -->
    <div class="modal fade" id="ModalUbahPassword" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="POST">    
                                <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input disabled type="email" class="form-control" id="floatingInput"
                                                    placeholder="name@example.com" name="username" required
                                                    value="">
                                                <label for="floatingInput">Username</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Username
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="floatingPassword"
                                                    name="passwordlama" required>
                                                <label for="floatingInput">Password Lama</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Password Lama
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="floatingPassword" name="passwordbaru" required>
                                                <label for="floatingInput">Password Baru</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Password Baru
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="floatingPassword"
                                                    name="repasswordbaru" required>
                                                <label for="floatingInput">Ulangi Password Baru</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Ulangi Password Baru
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="ubah_password_validate"
                                            value="1234">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- akhir Modal edit-->    
    <!-- end Header -->
    <div class="container-lg">
        <div class="row">
            <!-- sidebar -->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded-3 mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                            aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2"
                                            aria-current="page" href="home.html"><i class="bi bi-house-door"></i>
                                            Home</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link ps-2"
                                            href="produkadm.html"><i class="bi bi-cart"></i> Produk Admin</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link ps-2"
                                            href="user.html"><i class="bi bi-border-style"></i> User</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link ps-2"
                                            href="pembelian.html"><i class="bi bi-cart"></i> Pembelian</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link ps-2"
                                            href="produk.html"><i class="bi bi-list"></i> Product</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link ps-2"
                                            href="keranjang.html"><i class="bi bi-cart"></i> Keranjang</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link ps-2"
                                            href="checkout.html"><i class="bi bi-credit-card"></i> Checkout</a>
                                    </li>
                                    
            
                                    <li class="nav-item">
                                        <a class="nav-link ps-2"
                                            href="contact.html"><i class="bi bi-info-circle"></i> Contact</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg" style="margin-top:130px;">
                                <H6 style="padding-left:15px;">
                                    Jln.Medan - Banda Aceh
                                    8364+C47, Tanah Terban, Kec.Karang Baru,
                                    Kabupaten Aceh Tamiang,
                                    Aceh 24456
                                </H6>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- end sidebar -->

            <!-- Content -->
            <div class="col-lg-9 mt-2">
                <div class="card">
                    <div class="card-header">
                        Halaman Produk Admin
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex justify-content-end">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahProduk"> Tambah
                                    Produk</button>
                            </div>
                        </div>
                        <!-- Modal tambah Produk baru-->
                        <div class="modal fade" id="ModalTambahProduk" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_input_produk.php"
                                            method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control py-3" id="uploadFoto"
                                                            placeholder="Your Name" name="foto" required>
                                                        <label class="input-group-text" for="uploadFoto">Upload Foto Produk</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan File Foto Produk
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            placeholder="Nama Prosuk" name="nama_produk" required>
                                                        <label for="floatingInput">Nama Produk</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama Produk
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            placeholder="Deskripsi" name="deskripsi">
                                                        <label for="floatingPassword">Deskripsi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="kat_produk" required>
                                                            <option selected hidden value="">Pilih Kategori Produk</option>
                                                        </select>
                                                        <label for="floatingInput">Kategori Tas atau Sepatu</label>
                                                        <div class="invalid-feedback">
                                                            Pilih Kategori Tas atau Sepatu
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="Harga" name="harga" required>
                                                        <label for="floatingInput">Harga</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Harga Produk
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="Stok" name="stok" required>
                                                        <label for="floatingInput">Stok</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Stok
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="input_produk_validate"
                                                    value="1234">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal tambah Produk baru-->
            
                        <!-- Modal view Produk -->
                        <div class="modal fade" id="ModalView" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">View Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation"
                                            method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="text" class="form-control" id="floatingInput"
                                                            value="">
                                                        <label for="floatingInput">Nama Produk</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama Produk
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="text" class="form-control" id="floatingInput"
                                                            value="">
                                                        <label for="floatingPassword">Deskripsi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <select disabled class="form-select" aria-label="Default select example">
                                                            <option selected hidden value="">Pilih Kategori Menu</option>
                                                            
                                                        </select>
                                                        <label for="floatingInput">Kategori Tas atau Sepatu</label>
                                                        <div class="invalid-feedback">
                                                            Pilih Kategori Tas atau Sepatu
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="number" class="form-control" id="floatingInput"
                                                            value="">
                                                        <label for="floatingInput">Harga</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Harga Menu
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <input disabled type="number" class="form-control" id="floatingInput"
                                                            value="">
                                                        <label for="floatingInput">Stok</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Stok
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="input_menu_validate"
                                                    value="1234">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir Modal view Produk-->
            
                        <!-- Modal edit Produk -->
                        <div class="modal fade" id="ModalEdit" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_edit_produk.php" method="POST"
                                            enctype="multipart/form-data">
                                            <input type="hidden" value="" name="id_produk">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control py-3" id="uploadFoto"
                                                            placeholder="Your Name" name="foto" required>
                                                        <label class="input-group-text" for="uploadFoto">Upload Foto Produk</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan File Foto Produk
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            placeholder="Nama Produk" name="nama_produk" required
                                                            value="">
                                                        <label for="floatingInput">Nama Menu</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Nama Produk
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingInput"
                                                            placeholder="Deskripsi" name="deskripsi"
                                                            value="">
                                                        <label for="floatingPassword">Deskripsi</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="kat_produk">
                                                            <option selected hidden value="">Pilih Kategori Produk</option>
                                                            
                                                        </select>
                                                        <label for="floatingInput">Kategori Tas atau Sepatu</label>
                                                        <div class="invalid-feedback">
                                                            Pilih Kategori Tas atau Sepatu
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="Harga" name="harga" required
                                                            value="">
                                                        <label for="floatingInput">Harga</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Harga Produk
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" id="floatingInput"
                                                            placeholder="Stok" name="stok" required
                                                            value="">
                                                        <label for="floatingInput">Stok</label>
                                                        <div class="invalid-feedback">
                                                            Masukkan Stok
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="input_produk_validate"
                                                    value="1234">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir Modal edit-->
            
                        <!-- Modal Delete -->
                        <div class="modal fade" id="ModalDelete" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete data Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate action="proses/proses_delete_produk.php"
                                            method="POST">
                                            <input type="hidden" value="" name="idproduk">
                                            <input type="hidden" value="" name="foto">
                                            <div class="col-lg-12">
                                                Apakah anda ingin menghapus menu <b>
                                                    
                                                </b>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger" name="input_produk_validate"
                                                    value="1234">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir Modal Delete-->
            
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr class="text-nowrap">
                                        <th scope="col">No</th>
                                        <th scope="col">Foto Produk</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Jenis Produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <th scope="row">
                                            
                                        </th>
                                        <td>
                                            <div style="width: 100px">
                                                <img src="img/produk/92399-air force 1.png" class="img-thumbnail" alt="...">
                                            </div>
                                        </td>
                                        <td>
                                            Nike AF1
                                        </td>
                                        <td>
                                            Tersedia
                                        </td>
                                        <td>
                                            Sepatu
                                        </td>
                                        <td>
                                            Sepatu Sport
                                        </td>
                                        <td>
                                            490.000
                                        </td>
                                        <td>
                                            10
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                                    data-bs-target="#ModalView"><i
                                                        class="bi bi-eye-fill"></i></button>
                                                <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                    data-bs-target="#ModalEdit"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                                    data-bs-target="#ModalDelete"><i
                                                        class="bi bi-trash-fill"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    
                            
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>

        <div class="fixed-bottom text-center mb-2">
            Rizki Wanda Putra - TI 2A
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
        <script>
    (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

</script>
</body>

</html>


