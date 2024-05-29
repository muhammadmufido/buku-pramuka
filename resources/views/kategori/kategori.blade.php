@extends('layouts.layouts')

@section('content')
    <section id="kategori" style="margin-top: 100px">
        <div class="container py-5">
            <div class="header-kateori text-center">
                <h2 class="fw-bold">Kategori</h2>
            </div>

            <div class="row py-5 ">

                @foreach ($artikels as $item)
                    <div class="col-lg-4 mb-5 p-3">
                        <div class="card pt-3 rounded shadow-lg" style="width: 20rem; background-color: #E3C2A5">
                            <img src="{{ asset('storage/artikel/' . $item->img) }}" class=" p-2 rounded shadow-lg" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->judul }}</h5>
                                <a href="/detail/{{ $item->slug }}" class="btn btn-dark">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>
    </section>
@endsection
