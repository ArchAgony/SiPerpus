<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary sticky-top" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/">SiPerpus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/buku">Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="display-5 text-end animate__animated animate__fadeIn">
                    Baca Buku Kapan Saja, di Mana Saja
                    <div class="fs-4"><em>Jelajahi ribuan koleksi buku dari berbagai genre, semua dalam genggaman
                            Anda.</em></div>
                </div>
            </div>
            <div class="col text-center">
                <img src="images/Library-rafiki.svg" alt="Gambar" width="400px" height="400px">
            </div>
        </div>
    </div>
    <div class="bg-primary">
        <div class="container text-light pt-4 pb-4">
            <div class="text-center display-6">Kategori Buku</div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-book-half fs-1"></i><br>
                            <div class="fs-3">Fiksi</div>
                            <div class="fs-5">Jumlah: 45</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-flask fs-1"></i><br>
                            <div class="fs-3">Sains</div>
                            <div class="fs-5">Jumlah: 45</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-hourglass-split fs-1"></i><br>
                            <div class="fs-3">Sejarah</div>
                            <div class="fs-5">Jumlah: 45</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi bi-backpack2 fs-1"></i><br>
                            <div class="fs-3">Pelajaran</div>
                            <div class="fs-5">Jumlah: 45</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 pb-4 text-center">
        <div class="display-6">Buku Terbaru</div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
