@extends('layout.adminlayout')

@section('content')

<div class="container mt-5">

<div class="row">
    <div class="col-md-6">
        <h3 class="text-center fw-bold mt-2 mb-4">Color Add</h3>
        <form action="{{url('/dashboard/color-store')}}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="inputText" class="col-sm-4 col-form-label">Color Add</label>
                <div class="col-sm-6">
                  <input type="text" name="color_name" required class="form-control">
                </div>
              </div>
              <div class="row">
                  <div class="col-sm-4"></div>
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