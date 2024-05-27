@extends('layouts.guest')

@section('content')
    <section style= "background-color: #ECBF8D; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;" >
                <div class="container shadow py-5 col-xxl-6 rounded " style="background-color: #f1d0ab
                ; display: flex; flex-direction: column; height: 30rem; width: 25rem;  justify-content: center; align-items: center;  ">
                <div class="mt-2">
                    <img src="{{asset('assets/img/logo.png')}}" width="70px" alt="">  
                </div>
                <div>
                    <h3 class="fw-bold mb-3" style="font-size: 25px;">Halaman Login Admin</h3>
                </div>

                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Masukan Email</label>
                            <input type="email " name="email" class="form-control " style="width: 20rem;">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Masukan Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="d-flex flex-col justify-content-center">
                            <button type="submit" class="btn btn-primary" style="width: 15rem; margin-top:12px">Login</button>
                        </div>
                    </form>
                </div>
            </section>
@endsection
