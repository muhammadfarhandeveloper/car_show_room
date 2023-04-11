@extends('layout.adminlayout')

@section('content')

<div class="container mt-5">

<div class="row">
    <div class="col-md-8">
        <h3 class="text-center fw-bold">Brand Add</h3>
        <form action="{{url('/dashboard/brand-store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="inputText" class="col-sm-3 mt-4 col-form-label">Brand Name</label>
                <div class="col-sm-9 mt-4">
                  <input type="text" name="brand_name"  required class="form-control">
                    @error('brand_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <label for="inputText" class="col-sm-3 mt-4 col-form-label">Brand Thumbnail</label>
                <div class="col-sm-9 mt-4">
                  <input type="file" name="brand_img" required class="form-control">
                  @error('brand_img')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <label for="inputText" class="col-sm-3 mt-4 col-form-label">Brand Description</label>
                <div class="col-sm-9 mt-4">
                    <textarea class="form-control" required name="brand_desc" rows="5"></textarea>
                    @error('brand_desc')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
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
    
@endsection