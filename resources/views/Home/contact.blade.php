@extends('layout.homelayout')

@section('content')
    <main>
        <div class="bg-gray">
            <div class="container">
                <div class="row align-items-center p-5">
                    <div class="col-md-6">
                        <h2 class="text-dark display-5 fw-bold">Contact Us</h2>
                        <p class="text-dark">
                            <span><a class="text-decoration-none" href="{{url('/')}}">Home</a></span>/<samp><a
                                    class="text-decoration-none" href="{{url('/contact')}}">contact</a></samp>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{url('/public/images/car-img-min-1.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-wite">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                      @if (session()->has('status'))
                          <div class="alert alert-success" role="alert">
                            <p>{{session()->get('status')}}</p>
                          </div>
                      @endif

                        <div class="d-flex align-items-center">
                            <div class="mt-5">
                                <p class="p-0">JUST A CALL AWAY</p>
                                <h3 class="fw-bold my-text">We'd Love To Hear From <span class="text-black">YOU!</span></h3>
                                <div class="d-flex flex-column">
                                    <div class="d-flex my-3">
                                        <div><img width="70px" height="70px"
                                                src="https://wordpress.iqonic.design/vrooom/wp-content/uploads/2021/02/call-1.svg"
                                                alt=""></div>
                                        <div class="mx-3">
                                            <p class="fw-mbold p-0 m-0">Helpline Numbers</p>
                                            <p class="p-0 m-0">+923162859445</p>
                                        </div>
                                    </div>
                                    <div class="d-flex my-3">
                                        <div><img width="70px" height="70px"
                                                src="https://wordpress.iqonic.design/vrooom/wp-content/uploads/2021/02/location-1.svg"
                                                alt=""></div>
                                        <div class="mx-3">
                                            <p class="fw-mbold p-0 m-0">Office Address</p>
                                            <p class="p-0 m-0">Korangi Crossing Main The Providers Solutions Building</p>
                                        </div>
                                    </div>
                                    <div class="d-flex my-3">
                                        <div><img width="70px" height="70px"
                                                src="https://wordpress.iqonic.design/vrooom/wp-content/uploads/2021/02/mail-1.svg"
                                                alt=""></div>
                                        <div class="mx-3">
                                            <p class="fw-mbold p-0 m-0">Email</p>
                                            <p class="p-0 m-0">mohammadfarhan44500@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="formbold-main-wrapper">
                            <div class="formbold-form-wrapper">
                                <form action="{{url('/contact-us-store')}}" method="POST">
                                  @csrf
                                    <div class="formbold-mb-5">
                                        <label for="name" class="formbold-form-label"> Full Name </label>
                                        <input type="text" name="name" placeholder="Full Name"
                                            class="formbold-form-input" />
                                    </div>
                                    <div class="formbold-mb-5">
                                        <label for="phone" class="formbold-form-label"> Phone Number </label>
                                        <input type="text" name="phone" id="phone"
                                            placeholder="Enter your phone number" class="formbold-form-input" />
                                    </div>
                                    <div class="formbold-mb-5">
                                        <label for="email" class="formbold-form-label"> Email Address </label>
                                        <input type="email" name="email" id="email" placeholder="Enter your email"
                                            class="formbold-form-input" />
                                    </div>


                                    <div class="formbold-mb-5 formbold-pt-3">
                                        <label class="formbold-form-label formbold-form-label-2">
                                            Address Details
                                        </label>
                                        <div class="flex flex-wrap formbold--mx-3">
                                            <div class="w-full sm:w-half formbold-px-3">
                                                <div class="formbold-mb-5">
                                                    <input type="text" name="area" id="area"
                                                        placeholder="Enter area" class="formbold-form-input" />
                                                </div>
                                            </div>
                                            <div class="w-full sm:w-half formbold-px-3">
                                                <div class="formbold-mb-5">
                                                    <input type="text" name="city" id="city"
                                                        placeholder="Enter city" class="formbold-form-input" />
                                                </div>
                                            </div>
                                            <div class="w-full sm:w-half formbold-px-3">
                                                <div class="formbold-mb-5">
                                                    <input type="text" name="state" id="state"
                                                        placeholder="Enter state" class="formbold-form-input" />
                                                </div>
                                            </div>
                                            <div class="w-full sm:w-half formbold-px-3">
                                                <div class="formbold-mb-5">
                                                    <input type="number" name="post_code" id="post-code"
                                                        placeholder="Post Code" class="formbold-form-input" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn my-bg fw-bold text-dark px-5">Contact us</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
@endsection
