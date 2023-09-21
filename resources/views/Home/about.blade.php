@extends('layout.homelayout')

@section('content')

    <main>
        <div class="">
            <div class="container p-5">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="fw-bold my-text">About Car Showroom</h1>
                        <p>Car Showroom offers superb service in New York and Manhattan. We are the most popular and
                            have been chosen by many important people. We also provide premier service to the airport,
                            wedding, casino, sport event, proms etc. Until then,
                        </p>
                        <button class="btn my-bg text-white">Get Quote Now</button>
                    </div>
                    <div class="col-md-6">
                        <img src="{{url('/public/images/about-car1.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark p-5 text-white">
            <div class="row">
                <div class="d-flex justify-content-evenly align-items-center">
                    <span class="fw-bold fs-3 my-text">WHAT ABOUT PRICING?</span>
                    <span>Don’t worry. We provide very nice deals and the most competative price just for you!</span>
                    <span class="my-bg btn text-white">Check Rates</span>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container p-5">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{url('/public/images/about-limmo.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <h1 class="fw-bold my-text">Story About Us</h1>
                        <p> superb lim service in New York and Manhatatan.  We are the most popular and has been chosen by many important people. We also provide premier service to the airport, wedding, casino, sport event, proms etc. Donec id elit non mi porta gravida at eget metus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus.
                        </p>
                        <button class="btn my-bg text-white">Get Quote Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark">
            <div class="container p-5">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="fw-bold text-white">HELPS YOU TO FIND YOUR NEXT CAR EASILY</p>
                        <h1 class="fw-bold my-text">Welcome To Car Showroom</h1>
                        <p class="text-white"> Made. Bring upon there greater let. May darkness form. Fowl given unto is rule very heaven is she’d is male forth, second for moving appear spirit also land creature dominion for is days doesn’t made is place darkness without under created. Were. Beginning whose you’ll creeping. Morning behold subdue had it the Shall don’t creature.
                        </p>
                        <button class="btn my-bg text-white">Get Quote Now</button>
                    </div>
                    <div class="col-md-6">
                        <img src="{{url('/public/images/about-banner-1.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray p-5">
            <div class="container px-2 p-3">
                <div class="row align-items-center">
                  <div class="col-md-3">
                    <div class="card p-5 m-2 text-center">
                        <img src="{{url('/public/images/01.svg')}}" class="img-fluid" alt="">
                        <h3 class="my-texy fw-bold">500+</h3>
                        <p class="text-black">DEALER-REVIEWS</p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card p-5 m-2 text-center">
                        <img src="{{url('/public/images/02.svg')}}" class="img-fluid" alt="">
                        <h3 class="my-texy fw-bold">299+</h3>
                        <p class="text-black">VERIFIED-DEALERS</p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card p-5 m-2 text-center">
                        <img src="{{url('/public/images/03.svg')}}" class="img-fluid" alt="">
                        <h3 class="my-texy fw-bold">249+</h3>
                        <p class="text-black">VISITORS-PER-DAY</p>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card p-5 m-2 text-center">
                        <img src="{{url('/public/images/04.svg')}}" class="img-fluid" alt="">
                        <h3 class="my-texy fw-bold">24979+</h3>
                        <p class="text-black">CAR-SOLD</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </main>

@endsection
