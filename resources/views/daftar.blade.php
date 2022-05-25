<!doctype html>
<html lang="en">

<head>
    <!-- ICON -->
    <link rel="icon" href="{{asset('image/logo.png')}}" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel=" stylesheet">

    <!-- Javascript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="{{ asset('css/datatable.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <title>E-Perpus | Daftar</title>
</head>

<body>


    <div class="container-fluid ps-md-0 ">
        <div class="row g-0">
            <!-- Login  -->
            <!-- Background Image -->
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"><img class="img-fluid"
                    src="{{ asset('image/library.png') }}" alt="" srcset=""></div>
            <div class="col-md-8 col-lg-6">
                <div class="py-5 login d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto col-md-6 col-lg-8">
                                <div>
                                <h3 class="login-heading fs-2 fw-bold">Daftar Perpustakaan</h3>
                                <h3 class="mb-5 fs-2 fw-bold">Smkn 2 Banjarmasin</h3>
                              <form method="POST" action="/daftarpost">
                                    @csrf
                                </div>
                                    
                                <div class="mb-3 form-floating">
                                        <input type="number" class="form-control bg-input" id="floatingInput"
                                            placeholder="NIS" name="nis">
                                        <label for="floatingInput">NIS</label>
                                    </div>
                                
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Fullname" name="fullname">
                                        <label for="floatingInput">Nama lengkap</label>
                                    </div>

                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Username" name="username">
                                        <label for="floatingInput">Username</label>
                                    </div>

                                    <div class="mb-3 form-floating">
                                        <input type="password" class="form-control bg-input" id="floatingPassword"
                                            placeholder="Password" name="password">
                                            <label for="floatingInput">Password</label>
                                     </div>
                                    
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Kelas" name="kelas">
                                        <label for="floatingInput">Kelas</label>
                                    </div>

                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Alamat" name="alamat">
                                        <label for="floatingInput">Alamat</label>
                                    </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <button class="col-7 btn btn-lg btn-primary btn-login text-uppercase fw-bold"
                                        type="submit">Daftar</button>
                                    <a href="/"
                                    class="text-center mt-3 col-7 text-decoration-none"
                                            type="submit">Login</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="text-center text-white text-lg-start border-top " style="background-color:black;">
        <div class="container p-4">
            <div class="row">

                <div class="mb-4 col-lg-5 col-md-6 mb-md-0">
                    <h5 class="mb-4 text-uppercase fw-bold">Alamat Sekolah</h5>

                    <ul class="list-unstyled">
                        <li>
                            Jl. Brigjend H. Hasan Basri No. 6 Kayutangi Banjarmasin 70123

                        </li>
                        <li>
                            Telp./Fax. : 0511-3304677
                        </li>
                        <li>
                            E-Mail: surel@smkn2-bjm.sch.id
                        </li>

                    </ul>
                </div>
        </div>
    </footer>


    <script>
    </script>

</body>



</html>
