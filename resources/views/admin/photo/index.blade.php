@extends('layouts.layouts')
<section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
        <h4>Halaman Photo Kegiatan</h4>

        <a href="" class="btn btn-success py-2" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload
            Photo</a>

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
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp

                    @foreach ($photos as $item)
                        <tr>
                            <td>{{ $no++ }}
                            </td>
                            <td>
                                <img src="{{ asset('storage/photo/' . $item->image) }}" height="150" alt="">
                            </td>

                            <td>
                                <p>{{ $item->judul }}</p>
                            </td>

                            <td>
                                <a href="#" class="btn btn-warning" data-bs-target="#editModal{{ $item->id }}"
                                    data-bs-toggle="modal">Edit</a>
                                <form action="{{ route('photo.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <a href="#" class="btn btn-danger"
                                        data-bs-target="#deleteModal{{ $item->id }}"
                                        data-bs-toggle="modal">Hapus</a>
                                </form>
                            </td>
                        </tr>
                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Modal Edit</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('photo.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_photo" value="{{ $item->id }}">

                                            <div class="form-group mb-3">
                                                <label for="">Pilih Photo</label>
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('storage/photo/' . $item->image) }}"
                                                        height="100" alt="">
                                                </div>
                                                <input type="hidden" name="old_image" value="{{ $item->id }}">
                                                <input type="file" name="image" class="form-control">
                                                <label for="">Masukkan Judul</label>
                                                <input type="text" name="judul" class="form-control">
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
                                        <form action="{{ route('photo.destroy', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id_photo" value="{{ $item->id }}">

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

<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Modal Upload</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Pilih Photo</label>
                        <input type="file" name="image" class="form-control">
                        <label for="">Judul Kegiatan</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
