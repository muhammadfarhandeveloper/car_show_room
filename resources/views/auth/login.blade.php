@extends('layout.homelayout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center ">

        <div class="col-md-6">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session()->get('error')}}

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{route('loginstore')}}" method="POST">
                @csrf
                <label for="">Enter Email</label>
                <input type="email" required name="email" class="form-control" >
                <br>
                <label for="">Enter Password</label>
                <input type="password" name="password" class="form-control" >
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

        </div>
    </div>
</div>

@endsection
