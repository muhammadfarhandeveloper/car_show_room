@extends('layout.adminlayout')

@section('content')

<div class="container mt-5">

<div class="row">
    <div class="col-md-8">
        <h3 class="text-center fw-bold">Brand Edit</h3>
        <form action="{{url('/dashboard/brand-update')}}/{{$data->brands_id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputText" class="col-sm-3 mt-4 col-form-label">Brand Name</label>
                <div class="col-sm-9 mt-4">
                  <input type="text"  required class="form-control" value="{{$data->brands_name}}" name="brand_name">
                </div>
                <label for="inputText" class="col-sm-3 mt-4 col-form-label">Brand Thumbnail</label>
                <div class="col-sm-9 mt-4">
                  <input type="file"  class="form-control" name="brand_img">
                  <img src="/dimages/{{$data->brands_img}}" width="60" alt="">
                </div>
                <input type="hidden" name="oldimg" value="{{$data->brands_img}}">

                <label for="inputText" class="col-sm-3 mt-4 col-form-label">Brand Description</label>
                <div class="col-sm-9 mt-4">
                    <textarea class="form-control" rows="5" name="brand_desc" >{{$data->brands_desc}}</textarea>
                </div>
              </div>
              <div class="row justify-content-center"  >
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                      </svg> &nbsp; Update</button>
                </div>
            </div>
    
        </form>
    </div>
</div>

</div>
    
@endsection