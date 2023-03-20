@extends('layout')

@section('content')


<div class="container">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-right">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Logout
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout">Logout</a>
                    </div>
                </li>

            </ul>

        </div>
    </nav>



    <div class="card-body">
                <form action="{{url('tambah')}}" method="post">
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

                    <button type="submit" class="btn btn-primary">Tambah</button>


                </form>
            </div>

</div>

@endsection