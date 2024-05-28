@extends('layouts.layouts')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4>Halaman Video Tutorial</h4>

        <a href="" class="btn btn-success py-2" data-bs-toggle="modal" data-bs-target="#tambahVideo">tambah video</a>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Informasi</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </ul>
            </div>
        @endif
        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>judul</th>
                        <th>video</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($videos as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <p>{{ $item->judul }}</p>
                            </td>
                            <td>
                                <iframe  height="150" src="https://www.youtube.com/embed/{{ $item->youtube_code}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </td>
                            <td>
                                <a href="#" class="btn btn-warning" data-bs-target="#editVideo{{ $item->id }}"
                                    data-bs-toggle="modal">Edit</a>
                                <form action="{{ route('video.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <a href="#" class="btn btn-danger"
                                        data-bs-target="#deleteModal{{ $item->id }}"
                                        data-bs-toggle="modal">Hapus</a>
                                </form>
                            </td>
                        </tr>
                        <div class="modal fade" id="editVideo{{ $item->id }}" tabindex="-1"
                            aria-labelledby="editVideoLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editVideoLabel">Modal Edit</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('video.update', $item->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id_video" value="{{ $item->youtube_code }}">

                                            <div class="form-group mb-3">
                                                <label for="">Judul Video</label>
                                                <input type="text" name="judul" class="form-control">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">YouTube code</label> 
                                                <input type="text" name="youtube_code" class="form-control" value="{{$item->youtube_code}}">
                                            
                                            </div>

                                            <button type="submit" class="btn btn-warning">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">{{ __('Confirm Delete') }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('video.destroy', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_video" value="{{ $item->id }}">

                                            <div class="form-group mb-3">
                                                Apakah Kamu Yakin Foto Ini Dihapus?
                                            </div>

                                            <button type="submit" class="btn btn-danger">{{ __('Hapus') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</section>


{{-- modal upload --}}
<div class="modal fade" id="tambahVideo" tabindex="-1" aria-labelledby="tambahVideoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahVideoLabel">Modal Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('video.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">YouTube Code</label>
                        <input type="text" name="youtube_code" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
