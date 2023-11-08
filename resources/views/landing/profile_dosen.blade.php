<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Dosen</title>
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
                        <a class="nav-link" href="{{route('landing.berita_rpl')}}">Berita </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('landing.profile_kelulusan_rpl')}}">Profile Kelulusan </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('landing.profile_dosen')}}">Profile Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link col-1" style="margin-left: 520px;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="container mt-5">
            <section id="card">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        // Hubungkan ke database
                        $koneksi = mysqli_connect("localhost", "root", "", "project_laravel");

                        // Periksa koneksi
                        if (!$koneksi) {
                            die("Koneksi database gagal: " . mysqli_connect_error());
                        }

                        // Query untuk mengambil data berita
                        $query = "SELECT * FROM data_dosen";
                        $result = mysqli_query($koneksi, $query);

                        // Periksa apakah query berhasil
                        if (!$result) {
                            die("Query gagal: " . mysqli_error($koneksi));
                        }

                        // Loop untuk menampilkan data berita dari database

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Nama: ' . $row["nama"] . '</h5>
                                    <p class="card-text">NIP: ' . $row["nip"] . '</p>
                                    <p class="card-text">Mata Kuliah: ' . $row["mata_kuliah"] . '</p>
                                    <p class="card-text">Email: ' . $row["email"] . '</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Diupload pada ' . $row["created_at"] . '</small>
                                </div>
                            </div>
                        </div>';
                        }
                        // Tutup koneksi database
                        mysqli_close($koneksi);
                        ?>
                    </div>
                </div>
            </section>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
    </main>
</body>

</html>