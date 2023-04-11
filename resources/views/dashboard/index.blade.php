@extends('layout.adminlayout')

@section('content')


<div class="container">
    <div class="row">
      <div class="col-md-4 mt-5">
        <div class="card p-3">
          <div class="" style="height: 200px;">
            <img src="/dimages/WEggXmDf2022-Kawasaki-Ninja-H2R2-1536x1152-1.jpg" width="100%" alt="">
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
            <img src="/dimages/RQuC4iY6Suzuki_Alto_-_PNG.png" width="100%" alt="">
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
