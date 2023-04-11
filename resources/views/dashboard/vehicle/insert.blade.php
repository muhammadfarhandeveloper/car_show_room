@extends('layout.adminlayout')

@section('content')

<div class="container mt-5">

<div class="row">
    <div class="col-md-8">
        <h3 class="text-center fw-bold">Vehicle Add</h3>
        <form action="{{url('/dashboard/vehicle-store')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row mb-3">
                <label class="col-sm-3 mt-4 col-form-label">Vehicle Name</label>
                <div class="col-sm-9 mt-4">
                  <input type="text"  required class="form-control" name="v_name">
                </div>
                <label class="col-sm-3 mt-4 col-form-label">Vehicle Image</label>
                <div class="col-sm-9 mt-4">
                  <input type="file" required class="form-control" name="v_img">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Transmission</label>
                <div class="col-sm-9 mt-4">
                  <select name="vt_name" class="form-select" >
                    <option value="">Select</option>
                    <option value="0">Automatic</option>
                    <option value="1">Manual</option>
                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Mileage (only in Miles)</label>
                <div class="col-sm-9 mt-4">
                  <input type="number"  required class="form-control" name="v_mileage">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Short description</label>
                <div class="col-sm-9 mt-4">
                  <input type="text"  required class="form-control" name="v_short_desc">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle long Description</label>
                <div class="col-sm-9 mt-4">
                    <textarea class="form-control" rows="5" name="v_long_desc"></textarea>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Old Price </label>
                <div class="col-sm-9 mt-4">
                  <input type="number"  required class="form-control" name="v_old_price">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label" >Vehicle New Price </label>
                <div class="col-sm-9 mt-4">
                  <input type="number"  required class="form-control" name="v_price">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Engine (in only CC)</label>
                <div class="col-sm-9 mt-4">
                  <input type="number"  required class="form-control" name="v_engine">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Owner</label>
                <div class="col-sm-9 mt-4">
                  <select class="form-select" name="v_owner">
                    <option value="">Select</option>
                    <option value="0">First Owner</option>
                    <option value="1">Second Owner</option>
                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Use</label>
                <div class="col-sm-9 mt-4">
                  <select name="v_use" class="form-select" >
                    <option value="">Select</option>
                    <option value="0">New Vehicle</option>
                    <option value="1">Used Vehicle</option>
                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Type</label>
                <div class="col-sm-9 mt-4">
                  <select name="v_type" class="form-select" >
                    <option value="">Select</option>
                    @foreach ($vtype as $item)
                    <option value="{{$item->vehicle_type_id}}">{{$item->vehicle_type_name}}</option>
                    @endforeach
                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Body Type</label>
                <div class="col-sm-9 mt-4">
                  <select name="v_body_type" class="form-select" >
                    <option value="">Select</option>
                    @foreach ($vbodytype as $item)
                    <option value="{{$item->body_type_id}}">{{$item->body_type_name}}</option>
                    @endforeach
                  </select>
                </div>
               
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Model</label>
                <div class="col-sm-9 mt-4">
                  <select name="vmodels" class="form-select" >
                    <option value="">Select</option>
                    @foreach ($vmodels as $item)  
                    <option value="{{$item->vmodels_id}}">{{$item->vmodels_name}}</option>
                    @endforeach

                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Fuel Type</label>
                <div class="col-sm-9 mt-4">
                  <select name="fuel_types" class="form-select" >
                    <option value="">Select</option>
                    @foreach ($fuel_types as $item)
                    <option value="{{$item->fuel_type_id}}">{{$item->fuel_type_name}}</option>
                    @endforeach
                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Color</label>
                <div class="col-sm-9 mt-4">
                  <select name="colors" class="form-select" >
                    <option value="">Select</option>
                    @foreach ($colors as $item)                      
                    <option value="{{$item->color_id}}">{{$item->color_name}}</option>
                    @endforeach
                  </select>
                </div>

              </div>
              <div class="row justify-content-center"  >
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg> &nbsp; Add</button>
                </div>
            </div>
    
        </form>
    </div>
</div>

</div>
    
<br><br><br><br>


@endsection