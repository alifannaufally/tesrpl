<!-- Ini adalah kode HTML untuk halaman Home NutriCycle -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NutriCycle</title>
    <!-- Memuat file CSS dari Bootstrap untuk membuat halaman responsif -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Memuat file CSS custom -->
    <link rel="stylesheet" href="style.css">
    <!-- Memuat fontawesome untuk ikon -->
    <script src="https://kit.fontawesome.com/348c676099.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Menampilkan header halaman -->
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #13192B;">
            <div class="container-fluid">
                <div class="navbar-brand text-white pe-3" style="border-right: 1px solid white;">
                    <img src="images/logo.png" alt="Logo NutriCycle" width="40">NutriCycle
                </div>
                <div class="text-white collapse navbar-collapse">Home</div>
                <li class="nav-item dropdown" style="margin-right:30px;">
                    <div style="position: relative; bottom:10px;" class="nav-link dropdown-toggle" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="fas fa-user-circle fa-2x me-2 text-white"></p>
                        <span class="text-white" style="position: relative;bottom: 5px;">
                            Hi, {{ Auth::user()->name }}
                        </span>
                    </div>

                    <!-- Option pada Navbar -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">
                                <i class="fas fa-user"></i><span>Profile</span></a></li>
                        <li><a class="dropdown-item" href="{{ url('/about') }}">
                                <i class="fas fa-info-circle"></i>About Us</a></li>
                        <li><a class="dropdown-item" href="{{ url('/help') }}">
                                <i class="fas fa-question-circle"></i> Help</a></li>
                        <li><a class="dropdown-item" href="index"><i></i>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Log Out') }}
                                    </div>
                                </form>
                            </a></li>
                    </ul>
                </li>
            </div>
        </nav>
    </header>

    <!-- Menampilkan main halaman-->
    <main style="background: linear-gradient(to bottom, #0a1022 0%, #17388d 100%) !important;}">
        <br>
        <br>
        <br>
        <!-- Menampilkan bagian selamat datang -->
        <center>
            <h1 style="font-size:4.5rem;color:white;">
                Welcome to NutriCycle
            </h1>
            <br>
            <!-- Perintah untuk memilih opsi -->
            <p class="text-white">
                Choose the option you want :
            </p>
            <br>
            <div class="row" style="justify-content: center;">
                <!-- Menampilkan pilihan pelayanan masyarakat -->
                <div class="col" style="position: relative;left: 200px;">
                    <a href="pelayanan" class="text-decoration-none">
                        <span
                            style="display: inline-block; height: 250px; width: 250px; background-color: white; border-radius: 100%; overflow: hidden;padding: 50px;">
                            <img src="images/home-1.png" style="height: 100%; width: auto;">
                        </span>
                        <p class="text-white">
                            Pelayanan Masyarakat
                        </p>
                    </a>
                </div>
                <div class="col">
                    <span style="padding: 0 150px 0 150px;border-top: 1px solid white;position: relative;top: 120px;">
                    </span>
                </div>
                <!-- Menampilkan pilihan pembelian produk -->
                <div class="col" style="position: relative;right: 200px;">
                    <a href="produk" class="text-decoration-none">
                        <span
                            style="display: inline-block; height: 250px; width: 250px; background-color: white; border-radius: 100%; overflow: hidden;padding: 50px;">
                            <img src="images/home-2.png" alt="" style="height: 100%; width: auto;">
                        </span>
                        <p class="text-white">
                            Pembelian Produk
                        </p>
                    </a>
                </div>
            </div>
        </center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>

    <!-- Menampilkan footer halaman -->
    <footer class="bg-white text-center pt-3">
        <p> Copyright 2023 &copy; NutriCycle</p>
    </footer>

    <!-- Memuat file JavaScript dari Bootstrap untuk membuat halaman responsif -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
