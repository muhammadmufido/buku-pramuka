<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('assets/logo/logo.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- summernote script --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />


    {{-- magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">


    <title>Laravel</title>
</head>

<body>

    {{-- navbar --}}
    @include('layouts.navbar')

    {{-- konten --}}
    @yield('content')

    {{-- footer --}}
    <section id="footer" class="bg-brown item-align-center">
        <div class="py-4 px-4 justify-content-between" style="background-color: #E3C2A5">
            <footer>
                <div class="row d-flex justify-content-between">

                    {{-- 1.0 --}}
                    <div class="col-12 col-md-3 md-3 ">
                        <div class="d-flex mb-3">
                            <img src="{{ asset('assets/logo/smk (1).png') }}" height="45" width="45"
                                alt="">
                            <p class="fw-bold mt-2 me-2">Pramuka Eskasaba</p class="fw-bold mt-2 me-2">
                        </div>

                        <div>
                            <p>2024 © SMK NEGERI 1 BANGSRI</p>
                            <p>All rights reserved.</p>
                        </div>
                    </div>
                    {{-- 1.0 --}}

                    {{-- star 1 --}}
                    <div class="col-12 col-md-2 md-2">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2 "><a href="#hero" class="nav-link p-0 text-muted">Home</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#kategori"
                                        class="nav-link p-0 text-muted">Kategori</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#foto" class="nav-link p-0 text-muted">Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- end 1 --}}

                    {{-- 2.0 --}}
                    <div class="col-12 col-md-3 md-3 text-center">
                        <h5 class="fw-bold mb-3">Ambalan</h5>
                        <div class="">KH.ACHMAD FAUZAN <br> & <br> DEWI SARTIKA</div>
                        <img src="{{ asset('assets/logo/fauzan.png') }}" width="30" height="30" alt="">
                        <img src="{{ asset('assets/logo/kartika.png') }}" width="30" height="30" alt="">
                    </div>
                    {{-- 2.0 --}}

                    {{-- kolom2 --}}
                    <div class="col-12 col-md-2 md-2">
                        <h5 class="fw-bold mb-3">Medsos</h5>
                        <div class="d-flex mb-3">
                            <a href="https://www.instagram.com/pramuka_smksaba/" target="_blank"
                                class="text-decoration-none text-dark ">
                                <img src="{{ asset('assets/logo/instagram (1).svg') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                            <a href="https://www.youtube.com/@scouteskasaba6141" target="_blank"
                                class="text-decoration-none text-dark ">
                                <img src="{{ asset('assets/img/youtube.png') }}" height="30" width="30"
                                    class="me-4" alt="">
                            </a>
                        </div>
                    </div>
                    {{-- end 2 --}}

                    {{-- star 3 --}}

                    {{-- end 3 --}}

                </div>
            </footer>
        </div>
    </section>
    {{-- footer --}}

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="//ajak.googleapis.com/ajak/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });
    </script>
</body>

</html>
