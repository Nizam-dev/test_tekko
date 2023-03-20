@extends('layout')

@section('content')


<div class="container">

    <div class="col-md-6 mx-auto">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Login</h1>
            </div>
            <div class="card-body">
                <form action="{{url('register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="name" name="nama"  class="form-control @error('nama') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email"  class="form-control @error('email') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="">NO HP</label>
                        <input type="text" name="no_hp"  class="form-control @error('no_hp') is-invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>

                    <div class="mt-4">
                        <a href="{{url('login')}}">Login</a>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>


@endsection