@extends('layouts.layouts')

@section('content')
    {{-- hero --}}
    <section id="hero">
        <div class="container text-center text-white">
            <div class="hero-title">
                <div class="hero-text">Selamat Datang Di <br> Website ScooutBook</div>
                <p>Web ini berisikan beberapa tata cara melakukan sesauatu seperti upacara dll.</p>
                <p>“Sinau online,Tetep Gagah lan Trengginas”</p>
            </div>
        </div>
    </section>
    {{-- hero end --}}

    {{-- dasadarma section --}}
    <section class="d-flex justify-content-center mt-5 gap-5 dasadarma">
        {{-- dasadarma --}}
        <div class="card p-3" style="width: 25rem; background-color:#E3C2A5">
            <img src="{{ asset('assets/img/badenpowel.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold">Dasadarma</h5>
                <p class="card-text">1.Takwa Kepada Tuhan Yang Maha Esa<br>
                    2.Cinta Alam Dan Kasih Sayang Sesama Manusia<br>
                    3.Patriot Yang Sopan dan Kesatria<br>
                    4.Patuh dan Suka Bermusyawarah<br>
                    5.Rela Menolong dan Tabah<br>
                    6.Rajin, Terampil, dan Gembira<br>
                    7.Hemat, Cermat, dan Bersahaja<br>
                    8.Disiplin, Berani, dan Setia<br>
                    9.Bertanggungjawab dan Dapat Dipercaya<br>
                    10.Suci dalam Pikiran, Perkataan, dan Perbuatan</p>
            </div>
        </div>
        {{-- trisatya --}}
        <div class="card" style="width: 25rem; background-color:#E3C2A5">
            <div class="p-3">
                <img src="{{ asset('assets/img/badenpowel.png') }}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title text-center fw-bold">Tri Satya</h5>
                <p class="card-text">1.Menjalankan Kewajibanku terhadap Tuhan dan Negara Kesatuan Republik Indonesia<br>
                    2.Menolong Sesama hidup dan Mempersiapkan diri Membangun Masyarakat<br>
                    3.Menepati Dasa Dharma</p>
            </div>
        </div>
    </section>
    {{-- dasadarma section end --}}

    {{-- kategory section star --}}
    <section id="kategori">
        <div class="container py-5">
            <div class="header-kateori text-center">
                <h2 class="fw-bold">Kategori</h2>
            </div>

            <div class="row justify-content-center gap-5 py-5">
                @foreach ($artikels as $item)
                    <div class="card pt-3 " style="width: 20rem; background-color: #E3C2A5">
                        <img src="{{ asset('storage/artikel/' . $item->img) }}" class="  rounded shadow-lg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <a href="/detail/{{ $item->slug }}" class="btn btn-dark">Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="footer-kategori text-center">
                <a href="/kategori" class="btn btn-outline-black" style="border: 1px solid black">Kategori Lainnya</a>
            </div>
        </div>
    </section>
    {{-- kategory section end --}}

    {{-- vidio --}}
    <section id="tutorial" class="py-5">
        <div class="container">
            <div class="header-kateori text-center">
                <h2 class="fw-bold">Video Tutorial</h2>
            </div>

            <div class="row py-5">
                @foreach ($videos as $item)
                    <div class="col-lg-4">
                        <iframe width="100%" height="215"
                            src="https://www.youtube.com/embed/{{ $item->youtube_code }}?autoplay=1&=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                        {{-- option 2 --}}
                        {{-- <a href="https://www.youtube.com/embed/{{ $item->youtube_code }}?autoplay=1&=1">
                                <img class="img-fluid mb-3" style="border-radius: 13px" src="http://img.youtube.com/vi/{{ $item->youtube_code }}/maxresdefault.jpg" alt="">
                            </a> --}}
                        {{-- option 2 end --}}
                        <h1 style="font-size: 16px">{{ $item->judul }}</h1>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    {{-- vidio end --}}

    {{-- Kegiatan star --}}
    <section id="foto" class="section-foto parallax mb-5 gap-3">
        <div class="container py-5">
            <h3 class="fw-bold">Kegiatan Terbaru</h3>
        </div>
        <div class="container">
            <div class="row justify-content-between">
                @foreach ($photos as $photo)
                    <div class="col-lg-4 col-md-6 col-6 text-center bg-white shadow pt-2">
                        <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid" alt="">
                        <p class="py-3">{{ $photo->judul }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Kegiatan end --}}
@endsection
