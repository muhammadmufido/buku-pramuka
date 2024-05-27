@extends('layouts.layouts')

@section('content')
    <section id="detail" class="py-5" style="margin-top: 100px">
        <div class="container col-xxl-8 ">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('storage/artikel/' . $artikel->img) }}" class="img-fluid mb-3 rounded shadow-lg" alt="">
            </div>
            <div class="konten-berita ">
                <p class="mb-3 text-secondary">{{ $artikel->create_at }}</p>
                <h4 class="fw-bold mb-3 text-center">{{ $artikel->judul }}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>
    </section>
@endsection
