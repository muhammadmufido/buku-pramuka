@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5 ">
            <h3 class="fw-bold mb-3">Halaman Dasboard Admin </h3>
            <p>Selamat Datang Di Halaman Dasboard admin</p>
{{-- admin upload kategori --}}
            <div class="row gap-5">
                <div class="col-lg-4">
                    <div class="card shadow rounded-3 border-0">
                        <div class="card-body">
                            <h5 class="card-title">Blog Kategori</h5>
                            <p class="card-text">Atur dan kelola kategori</p>
                            <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                {{-- admin upload foto --}}
                <div class="col-lg-4">
                    <div class="card shadow rounded-3 border-0">
                        <div class="card-body">
                            <h5 class="card-title">foto kegiatan</h5>
                            <p class="card-text">Atur dan kelola foto kegiatan</p>
                            <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                {{-- admin upload video --}}
                <div class="col-lg-4">
                    <div class="card shadow rounded-3 border-0">
                        <div class="card-body">
                            <h5 class="card-title">Video Tutorial</h5>
                            <p class="card-text">Atur dan kelola Video Tutorial</p>
                            <a href="{{ route('video') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
