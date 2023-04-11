@extends('layout.homelayout')

@section('content')


<main>
  <div class="">
      <div class="container p-5">
          <div class="row align-items-center">
              <div class="col-md-6">
                  <h1 class="fw-bold my-text">{{$data->brands_name}}</h1>
                  <p>{{$data->brands_desc}}
                  </p>
                  <button class="btn my-bg text-dark">Get Quote Now</button>
              </div>
              <div class="col-md-6">
                  <img src="/dimages/{{$data->brands_img}}" class="img-fluid" alt="">
              </div>
          </div>
      </div>
  </div>
  <div class="bg-gray">
      <div class="container">
          <div class="row justify-content-center clr-grey">
              <!-- Card Start -->
              @foreach ($branddata as $item)
              <div class="col-md-4 my-3">
                <div class="card p-card">
                  <img class="p-img" src="/dimages/{{$item->vehicle_img}}" width="100%" height="250" alt="not-found">
                  <div class="card-body">
                    <h1 class="card-tittle fw-bolder text-dark">{{$item->vehicle_name}}</h1>
                    <span class="fs-5 fw-mbold my-text">{{$item->vehicle_price}} &nbsp;<del class="text-black-50">{{$item->vehicle_old_price}}</del></span>
                    <ul class="list-unstyled my-3">
                      <li class="text-dark fw-mbold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-fuel-pump" viewBox="0 0 16 16">
                          <path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-5Z" />
                          <path
                            d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8V2Z" />
                        </svg>
                        {{$item->fuel_type_name}}
                      </li>
                      <li class="text-dark fw-mbold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-speedometer2" viewBox="0 0 16 16">
                          <path
                            d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                          <path fill-rule="evenodd"
                            d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                        </svg>
                        {{$item->vehicle_mileage}}
                      </li>
                      <li class="text-dark fw-mbold d-flex justify-content-between">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                              d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                          </svg>
                          @if ($item->vehicle_use == 0)
                              {{"1st Owner"}}
                              @else
                              {{"2nd Owner"}}
                          @endif
                        </span>
                      </li>
                    </ul>
                    {{-- <button class="btn btn-warning text-white fw-bold w-100 mt-4 px-5">Get Quote</button> --}}
                  </div>
                </div>
              </div> 

              @endforeach
              <!-- Card End-->
             
            </div>
      </div>
  </div>
</main>

@endsection