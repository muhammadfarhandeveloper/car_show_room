@extends('layout.adminlayout')

@section('content')

<div class="container mt-5">

<div class="row">
    <div class="col-md-8">
        <h3 class="text-center fw-bold">Model Edit</h3>
        <form action="{{url('/dashboard/model-update')}}/{{$data->vmodels_id}}" method="POST">
          @csrf
            <div class="row mb-3">
                <label for="inputText" class="col-sm-3 mt-4 col-form-label">Model Name</label>
                <div class="col-sm-9 mt-4">
                  <input type="text" name="model_name"  required class="form-control" placeholder="Enter Model Name" value="{{$data->vmodels_name}}">
                </div>
                <label for="inputText" class="col-sm-3 mt-4 col-form-label">Brand Name</label>
                <div class="col-sm-9 mt-4">

                  <select name="brand_id" class="form-select" required>
                    <option value="">Select</option>
                  @foreach ($data1 as $item)    
                  <option value="{{$item->brands_id}}" @if ($item->brands_id == $data->brands_id)
                      {{"selected"}}
                  @endif>{{$item->brands_name}}</option>
                  @endforeach
                </select>
                </div>
                
              </div>
              <div class="row justify-content-center"  >
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                        </svg> &nbsp; Update</button>
                </div>
            </div>
    
        </form>
    </div>
</div>

</div>
    
@endsection