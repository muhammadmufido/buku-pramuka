@extends('layouts.layouts')

@section('content')
    <section id="kategori" style="margin-top: 100px">
        <div class="container py-5">
            <div class="header-kateori text-center">
                <h2 class="fw-bold">Kategori</h2>
            </div>

            <div class="row py-5 ">

                @foreach ($artikels as $item)
                    <div class="col-lg-4 mb-5">
                        <div class="card border-0 p-3 " style="background-color: #E3C2A5">
                            <img src="{{ asset('storage/artikel/' . $item->img) }}" class="img-fluid mb-3 rounded shadow-lg"
                                alt="">
                            <div class="konten-berita ">
                                <p class="mb-3ctext-secondary">{{ $item->create_at }}</p>
                                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                                <p class="text-secondary">#pramukahebat</p>
                                <a href="/detail/{{ $item->slug }}"
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>
    </section>
@endsection
