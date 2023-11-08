<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>berita KSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{route('user.home')}}">
                <img src="{{('../images/logo polbeng.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Perpustakaan
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('landing.berita_rpl')}}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing.profile_kelulusan_rpl')}}">Profile Kelulusan </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing.profile_dosen')}}">Profile Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link col-1" style="margin-left: 520px;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <h1>Berita</h1>
    <!--Jumbotron-->
    <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-6 fw-bold">Selamat Datang di Halaman Berita Prodi KSI</h1>
                <p class="col-md-8 fs-4">Dapatkan informasi terupdate dari Program Studi Keamanan Sistem Informasi dan jangan lewatkan kesempatan untuk mendaftar di program studi ini.</p>
                <!--<button class="btn btn-primary btn-lg" type="button">Button</button>-->
            </div>
        </div>
        <!--End Jumbotron-->
        <!-- End Navbar -->
        <!--card-->
        <section id="card">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img src="{{ asset('image/2650149.jpg') }}" class="card-img-top" alt="" width="450" height="350">
                            <div class="card-body">
                                <h5 class="card-title">Penerimaan Mahasiswa Baru</h5>
                                <p class="card-text">Telah dibuka penerimaan mahasiswa baru program studi keamanan sistem informasi dengan kuota sebanyak 250 mahasiswa</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir update 1 hari yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 text-center">
                        <img src="{{ asset('image/8601.jpg') }}" class="card-img-top" alt="" width="450" height="350">

                            <div class="card-body">
                                <h5 class="card-title">Juara 3 Keamanan Siber KMIPN</h5>
                                <p class="card-text">Mahasiswa program studi Keamanan sistem informasi berhasil meraih juara 3 dalam kegiatan KMIPN cabang lomba keamanan siber</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir update 20 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100 text-end">
                            <img src="{{ asset('image/4119036.jpg') }}" class="card-img-top" alt="" width="450" height="350">
                            <div class="card-body">
                                <h5 class="card-title">Ujian Akhir Semester</h5>
                                <p class="card-text">Pada tanggal 18 Desember 2023 mahasiswa program studi keamanan sistem informasi,
                                    akan melaksanakan ujian akhir semester.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Terakhir update 2 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End card-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>