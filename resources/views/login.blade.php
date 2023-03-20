@extends('layout')

@section('content')


    <div class="container">

        <div class="col-md-6 mx-auto">
            <div class="card mt-4">
                <div class="card-header">
                    <h1>Login</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>

                        <div class="mt-4">
                        <a href="{{url('register')}}">Register</a>

                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>
    

@endsection