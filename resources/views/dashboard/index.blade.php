@extends('layout.adminlayout')

@section('content')


<div class="container">

    <div class="row">
        @if (session()->has('error'))
        <div class="col-md-4">

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session()->get('error')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
        @if (session()->has('success'))
        <div class="col-md-4">

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
    </div>

    <div class="row">
      <div class="col-md-4 mt-5">
        <div class="card p-3">
          <div class="" style="height: 200px;">
            <img src="{{url('/public/dimages/WEggXmDf2022-Kawasaki-Ninja-H2R2-1536x1152-1.jpg')}}" width="100%" alt="">
          </div>
          <h3 class="mt-2">Total Bikes : {{$bikecount[0]->count}} </h3>
          <p>there are total bikes in our inventory</p>
          <a href="{{url('/dashboard/bike-home')}}">
            <button class="btn btn-primary">More</button>
          </a>
        </div>
      </div>
      <div class="col-md-4 mt-5">
        <div class="card p-3">
          <div class="" style="height: 200px;">
            <img src="{{url('/public/dimages/RQuC4iY6Suzuki_Alto_-_PNG.png')}}" width="100%" alt="">
          </div>
          <h3 class="mt-2">Total Cars : {{$carcount[0]->count}} </h3>
          <p>there are total Cars in our inventory</p>
          <a href="{{url('/dashboard/bike-home')}}">
            <button class="btn btn-primary">More</button>
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection
