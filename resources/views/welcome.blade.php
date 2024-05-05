<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('assets/logo/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Laravel</title>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-black  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/logo/logo.ico') }}" height="30"
                    width="30" alt=""></a>
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/logo/ungu.png') }}" height="30"
                    width="30" alt=""></a>
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/logo/coklat.png') }}" height="30"
                    width="30" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sosmed</a>
                    </li>

            </div>
        </div>
    </nav>
    {{-- navbar end --}}


    {{-- hero --}}
    <section id="hero">
        <div class="container text-center text-white">
            <div class="hero-title">
                <div class="hero-text">Selamat Datang Di <br> Website ScooutBook</div>
                <p>Web ini berisikan beberapa tata cara melakukan sesauatu seperti upacara dll.</p>
            </div>
        </div>
    </section>
    {{-- hero end --}}

    {{-- dasadarma section --}}

    {{-- dasadarma section end --}}

    {{-- kategory section star --}}
    <section id="kategori">
        <div class="container py-5">
            <div class="header-kateori text-center">
                <h2 class="fw-bold">Kategori</h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3ctext-secondary">06/05/2024</p>
                            <h4 class="fw-bold mb-3">Cara membuat dragbar</h4>
                            <p class="text-secondary">#pramukahebat</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3ctext-secondary">06/05/2024</p>
                            <h4 class="fw-bold mb-3">Cara membuat dragbar</h4>
                            <p class="text-secondary">#pramukahebat</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3ctext-secondary">06/05/2024</p>
                            <h4 class="fw-bold mb-3">Cara membuat dragbar</h4>
                            <p class="text-secondary">#pramukahebat</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3ctext-secondary">06/05/2024</p>
                            <h4 class="fw-bold mb-3">Cara membuat dragbar</h4>
                            <p class="text-secondary">#pramukahebat</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3ctext-secondary">06/05/2024</p>
                            <h4 class="fw-bold mb-3">Cara membuat dragbar</h4>
                            <p class="text-secondary">#pramukahebat</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3ctext-secondary">06/05/2024</p>
                            <h4 class="fw-bold mb-3">Cara membuat dragbar</h4>
                            <p class="text-secondary">#pramukahebat</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-kategori text-center">
                <a href="" class="btn btn-outline-danger">Kategori Lainnya</a>
            </div>
        </div>
    </section>
    {{-- kategory section end --}}

    {{-- vidio --}}
    <section id="vidio-youtube" class="py-5">
        <div class="container">
            <div class="header-kateori text-center">
                <h2 class="fw-bold">Video Tutorial</h2>
            </div>

            <div class="row py-5">
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/vJlWFwX3LJc?si=6SfPTxg9mva6LvBc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/vJlWFwX3LJc?si=6SfPTxg9mva6LvBc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                        src="https://www.youtube.com/embed/vJlWFwX3LJc?si=6SfPTxg9mva6LvBc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <div class="footer-kategori text-center">
                <a href="" class="btn btn-outline-danger">Tutorial Lainnya</a>
            </div>
        </div>
    </section>
    {{-- vidio end --}}

    {{-- Kegiatan star --}}
    <section id="foto" class="section-foto parallax">
        <div class="container py-5">
            <h3 class="fw-bold">Kegiatan Terbaru</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <img src="{{ asset('assets/img/kelas.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Kegiatan end --}}


    {{-- footer --}}
    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                    <div class="col-12 col-md-3 md-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="#Kategori"
                                        class="nav-link p-0 text-muted">kategori</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>
    {{-- footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
