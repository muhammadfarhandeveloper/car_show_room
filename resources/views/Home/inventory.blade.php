@extends('layout.homelayout')

@section('content')
    <main>
        <div class="bg-gray">
            <div class="container">
                <div class="row align-items-center p-5">
                    <div class="col-md-6">
                        <h2 class="text-dark display-5 fw-bold">Listing Inventory</h2>
                        <p class="text-white">
                            <span><a class="text-decoration-none" href="./index.html">Home</a></span>/<samp><a
                                    class="text-decoration-none" href="./cars-home.html">Cars Home</a></samp>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="./images/car-img-min-1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark">
            <div class="container-fluid">
                <div class="row p-3">
                    <div class="col-md-3 rounded bg-white p-4">
                        <h3 class="text-dark fw-bold">Search Option <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg></h3>

                            <h5>Instruction(How to Drive?):</h5>
                              <ul class="mt-5">
                                <li class="mt-2">Step 1: Start a Car</li>
                                <li class="mt-2">Step 2: Select Your Gear</li>
                                <li class="mt-2">Step 3: Release the Parking Brake</li>
                                <li class="mt-2">Step 4: Set a Car in Motion</li>
                                <li class="mt-2">Step 5: Use the Neutral Gear.</li>
                                <li class="mt-2">Step 6: Using Lower Gears.</li>
                                <li class="mt-2">Step 7: Stop a Car.</li>
                              </ul>
                            {{-- <form action="">
                            <div class="d-flex flex-column">
                                <select class="form-select my-1" aria-label="Default select example">
                                    <option selected>Brand</option>
                                    <option value="1">Toyota</option>
                                    <option value="2">BMW</option>
                                    <option value="3">Lamborghini</option>
                                </select>
                                <select class="form-select my-1" aria-label="Default select example">
                                    <option selected>Model</option>
                                    <option value="1">Series</option>
                                    <option value="2">2023 CS6</option>
                                </select>
                                <select class="form-select my-1" aria-label="Default select example">
                                    <option selected>Body</option>
                                    <option value="1">Compact</option>
                                    <option value="2">Convertible</option>
                                    <option value="2">OFF-Road</option>
                                </select>
                                <select class="form-select my-1" aria-label="Default select example">
                                    <option selected>Transmission</option>
                                    <option value="1">Automatic</option>
                                    <option value="2">Manual</option>
                                </select>
                                <select class="form-select my-1" aria-label="Default select example">
                                    <option selected>Condition</option>
                                    <option value="1">Used</option>
                                    <option value="2">New</option>
                                </select>
                                <select class="form-select my-1" aria-label="Default select example">
                                    <option selected>Fuel Type</option>
                                    <option value="1">Petrol</option>
                                    <option value="2">Diesel</option>
                                    <option value="2">Electronic</option>
                                </select>
                                <select class="form-select my-1" aria-label="Default select example">
                                    <option selected>Vehicle Type</option>
                                    <option value="1">Bike</option>
                                    <option value="2">Car</option>
                                </select>
                                <select class="form-select my-1" aria-label="Default select example">
                                    <option selected>Owner</option>
                                    <option value="1">1rst</option>
                                    <option value="2">2nd</option>
                                </select>
                            </div>
                        </form> --}}
                    </div>
                    <div class="col-md-9">
                      <form action="">

                        <p class="mb-3 text-white align-items-center d-flex">Sort by: &nbsp; 
                          @if ($search == "")
                          <select
                          class="form-select my-1 w-auto" aria-label="Default select example" name="searching" onchange="this.form.submit()">
                          <option value="asc">Select </option>
                          <option value="asc">Ascending </option>
                          <option value="desc">Descending </option>
                          <option value="pasc">Low to High  Price</option>
                          <option value="pdesc">High  to low Price</option>
                        </select>
                          @endif

                          @if ($search == "asc")
                          <select
                          class="form-select my-1 w-auto" aria-label="Default select example" name="searching" onchange="this.form.submit()">
                          <option value="asc">Select </option>
                          <option value="asc" selected>Ascending </option>
                          <option value="desc">Descending </option>
                          <option value="pasc">Low to High  Price</option>
                          <option value="pdesc">High  to low Price</option>
                        </select>
                          @elseif ($search == "desc")
                          <select
                          class="form-select my-1 w-auto" aria-label="Default select example" name="searching" onchange="this.form.submit()">
                          <option value="asc">Select </option>
                          <option value="asc">Ascending </option>
                          <option value="desc" selected>Descending </option>
                          <option value="pasc">Low to High  Price</option>
                          <option value="pdesc">High  to low Price</option>
                        </select>
                          @endif
                          
                        @if ($search == "pasc")
                        <select
                        class="form-select my-1 w-auto" aria-label="Default select example" name="searching" onchange="this.form.submit()">
                        <option value="asc">Select </option>
                        <option value="asc">Ascending </option>
                        <option value="desc">Descending </option>
                        <option value="pasc" selected>Low to High  Price</option>
                        <option value="pdesc">High  to low Price</option>
                      </select>
                      @elseif ($search == "pdesc")
                      <select
                      class="form-select my-1 w-auto" aria-label="Default select example" name="searching" onchange="this.form.submit()">
                      <option value="asc">Select </option>
                      <option value="asc">Ascending </option>
                      <option value="desc">Descending </option>
                      <option value="pasc">Low to High  Price</option>
                      <option value="pdesc" selected>High  to low Price</option>
                    </select>
                          @endif

                       </p>
                      </form>
                        <div class="w-100 px-5 py-3 bg-white rounded">

                            @foreach ($data as $item)
                                <div class="row mt-5">
                                    <div class="col-4">
                                        <img class="img-fluid" width="100%" height="300px"
                                            src="dimages/{{ $item->vehicle_img }}" alt="">
                                    </div>
                                    <div class="col-8">
                                        <div class="px-1">

                                            <div class="d-flex align-items-center w-100 px-1 justify-content-between">
                                                <h2 class="fw-bold">{{ $item->vehicle_name }}</h2>
                                                <span class="btn my-bg text-white fw-bold">
                                                    @if ($item->vehicle_use == 0)
                                                        {{ 'Used' }}
                                                    @else
                                                        {{ 'New' }}
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="px-1 d-flex align-items-center">
                                                <span class="pe-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-speedometer2"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                                        <path fill-rule="evenodd"
                                                            d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                                    </svg> | {{ $item->vehicle_mileage }}</span>
                                                <span class="px-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
                                                        <path
                                                            d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z" />
                                                        <path
                                                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z" />
                                                    </svg> {{ $item->body_type_name }}
                                                </span>
                                                <span class="px-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-fuel-pump" viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-5Z" />
                                                        <path
                                                            d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8V2Z" />
                                                    </svg> {{ $item->fuel_type_name }}
                                                </span>
                                                <span class="px-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                                    </svg>
                                                    @if ($item->vehicle_owner == 0)
                                                        {{ '1st Owner' }}
                                                    @else
                                                        {{ '2nd Owner' }}
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="px-1 py-2">
                                                <p>{{ $item->vehicle_short_desc }}</p>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn my-bg text-dark" style="visibility: hidden;">Read More</button>
                                                <h3 class="fw-bold my-text">${{ $item->vehicle_price }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
