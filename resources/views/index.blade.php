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
                        <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    </div>
                </li>

            </ul>

        </div>
    </nav>



    <div class="card mt-5">

        <div class="card-header">
            <a href="{{url('tambah')}}" class="btn btn-primary">
                Tambah
            </a>
        </div>
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Hp</th>
                </tr>
            </thead>
            <tbody>
               
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->nama}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->no_hp}}</td>
                    <td>

                        <a href="{{url('edit/'.$user->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('hapus/'.$user->id)}}"  class="btn btn-danger">Hapus</a>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        </div>

    </div>

</div>

@endsection