<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Kelulusan</title>
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
                        <a class="nav-link" href="{{route('landing.berita_rpl')}}">Berita KSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('landing.profile_kelulusan_rpl')}}">Profile Kelulusan KSI</a>
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
    <div class="container">
        <div class="row">
            <h3 class="mt-3">Profil Kelulusan</h3>
            <p>Berbagai peran yang dapat dilakukan oleh lulusan program studi Sistem Informasi di bidang keahlian atau bidang kerja tertentu setelah menyelesaikan masa perkuliahan.</p>

            <div class="col-lg">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>Profil</th>
                            <th>Capaian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Information Security Risk Analyst</td>
                            <td>Seorang analis risiko keamanan informasi, tugas Anda adalah membantu menilai setiap potensi ancaman dan menentukan apakah sistem jaringan Anda saat ini rentan terhadap ancaman tersebut atau tidak. </td>
                        </tr>
                        <tr>
                            <td>Security Analyst</td>
                            <td>Seorang analis security adalah pihak yang merancang, melaksanakan, memantau dan juga mengupgrade setiap langkah keamanan agar jaringan komputer di perusahaan bisa terlindungi. </td>
                        </tr>
                        <tr>
                            <td>Network Designer</td>
                            <td>Seorang yang men-desain infrastruktur Jaringan Komunikasi untuk LAN (Local Area Network) maupun WAN (Wide Area Network). </td>
                        </tr>
                        <tr>
                            <td>Information System Security Engineer</td>
                            <td>Seorang yang memantau dan memastikan keamanan perangkat keras (hardware) dan perangkat lunak (software) dari kemungkinan penyalahgunaan, kebocoran data, gangguan, penyadapan, peretasan, dan ancaman kejahatan dunia maya lainnya. </td>
                        </tr>
                        <tr>
                            <td>Application Developer</td>
                            <td>Pengembang perangkat lunak adalah individu, komunitas atau perusahaan yang membuat perangkat lunak. </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="text-center mt-5 bg-primary" style="padding:8px;">
        <h5>Politeknik Negeri Bengkalis &#169; 2019, Polbeng</h5>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>