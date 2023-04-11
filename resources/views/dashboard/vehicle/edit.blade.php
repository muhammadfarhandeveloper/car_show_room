@extends('layout.adminlayout')

@section('content')

<div class="container mt-5">

<div class="row">
    <div class="col-md-8">
        <h3 class="text-center fw-bold">Vehicle Edit</h3>
        <form action="{{url('/dashboard/vehicle-update')}}/{{$data->vehicle_id}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row mb-3">
                <label class="col-sm-3 mt-4 col-form-label">Vehicle Name</label>
                <div class="col-sm-9 mt-4">
                  <input type="text"  required class="form-control" name="v_name" value="{{$data->vehicle_name}}">
                </div>
                <label class="col-sm-3 mt-4 col-form-label">Vehicle Image</label>
                <div class="col-sm-9 mt-4">
                  <input type="file" class="form-control" name="v_img">
                  <img src="{{url('/dimages')}}/{{$data->vehicle_img}}" width="60px" alt="">
                  <input type="hidden" name="old_img" value="{{$data->vehicle_img}}">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Transmission</label>
                <div class="col-sm-9 mt-4">
                  <select name="vt_name" class="form-select" >
                    @if ($data->vehicle_transmission == 0)
                    <option value="0" selected>Automatic</option>
                    <option value="1">Manual</option>
                    @else
                    <option value="0">Automatic</option>
                    <option value="1" selected>Manual</option>                      
                    @endif

                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Mileage (only in Miles)</label>
                <div class="col-sm-9 mt-4">
                  <input type="number"  required class="form-control" name="v_mileage" value="{{$data->vehicle_mileage}}">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Short description</label>
                <div class="col-sm-9 mt-4">
                  <input type="text"  required class="form-control" name="v_short_desc" value="{{$data->vehicle_short_desc}}">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle long Description</label>
                <div class="col-sm-9 mt-4">
                    <textarea class="form-control" rows="5" name="v_long_desc">{{$data->vehicle_long_desc}}</textarea>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Old Price </label>
                <div class="col-sm-9 mt-4">
                  <input type="number"  required class="form-control" name="v_old_price" value="{{$data->vehicle_old_price}}">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label" >Vehicle New Price </label>
                <div class="col-sm-9 mt-4">
                  <input type="number"  required class="form-control" name="v_price" value="{{$data->vehicle_price}}">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Engine (in only CC)</label>
                <div class="col-sm-9 mt-4">
                  <input type="number"  required class="form-control" name="v_engine" value="{{$data->vehicle_engine}}">
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Owner</label>
                <div class="col-sm-9 mt-4">
                  <select class="form-select" name="v_owner">
                    @if ($data->vehicle_owner == 0)
                    <option value="0" selected>First Owner</option>
                    <option value="1">Second Owner</option>                      
                    @else
                    <option value="0">First Owner</option>
                    <option value="1" selected>Second Owner</option>
                    @endif

                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Use</label>
                <div class="col-sm-9 mt-4">
                  <select name="v_use" class="form-select" >
                    
                    @if ($data->vehicle_owner == 0)
                    <option value="0" selected>New Vehicle</option>
                    <option value="1">Old Vehicle</option>                      
                    @else
                    <option value="0">New Vehicle</option>
                    <option value="1" selected>Old Vehicle</option>
                    @endif

                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Type</label>
                <div class="col-sm-9 mt-4">
                  <select name="v_type" class="form-select" >

                    @foreach ($vtype as $item)
                    <option value="{{$item->vehicle_type_id}}"
                        @if ($item->vehicle_type_id == $data->vehicle_type_id)
                          {{"selected"}}
                        @endif
                      >{{$item->vehicle_type_name}}</option>
                    @endforeach
                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Body Type</label>
                <div class="col-sm-9 mt-4">
                  <select name="v_body_type" class="form-select" >
                    @foreach ($vbodytype as $item)
                    @if ($item->body_type_id == $data->body_type_id)
                      {{"selected"}}
                    @endif
                    <option value="{{$item->body_type_id}}">{{$item->body_type_name}}</option>
                    @endforeach
                  </select>
                </div>
               
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Model</label>
                <div class="col-sm-9 mt-4">
                  <select name="vmodels" class="form-select" >
                    @foreach ($vmodels as $item)  
                    <option value="{{$item->vmodels_id}}" 
                      @if ($item->vmodels_id == $data->model_id)
                        {{"selected"}}
                      @endif>{{$item->vmodels_name}}</option>
                    @endforeach

                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Fuel Type</label>
                <div class="col-sm-9 mt-4">
                  <select name="fuel_types" class="form-select" >
                    @foreach ($fuel_types as $item)
                    <option value="{{$item->fuel_type_id}}" 
                      @if ($item->fuel_type_id == $data->fuel_type_id)
                          {{"selected"}}
                      @endif>{{$item->fuel_type_name}}</option>
                    @endforeach
                  </select>
                </div>
                <label  class="col-sm-3 mt-4 col-form-label">Vehicle Color</label>
                <div class="col-sm-9 mt-4">
                  <select name="colors" class="form-select" >
                    
                    @foreach ($colors as $item)                      
                    <option value="{{$item->color_id}}" 
                      @if ($item->color_id == $data->color_id)
                          {{"selected"}}
                      @endif>{{$item->color_name}}</option>
                    @endforeach
                  </select>
                </div>

              </div>
              <div class="row justify-content-center"  >
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg> &nbsp; Update</button>
                </div>
            </div>
    
        </form>
    </div>
</div>

</div>
    
<br><br><br><br>


@endsection