@extends('layout.adminlayout')

@section('content')

<div class="container">
    <div class="card">
      <br>
      <div class="row ms-3">
          <div class="col-md-6">

              @if (session()->has('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session()->get('status') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
          </div>
      </div>
      <div class="row ms-3">
          <div class="col-md-6">

              @if (session()->has('status1'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ session()->get('status1') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
          </div>
      </div>
        <div class="card-body">
          <h5 class="card-title">Body type List</h5>
    
          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($data as $item)
                
              <tr>
                <th scope="row">{{$item->body_type_id}}</th>
                <td>{{$item->body_type_name}}</td>
                <td> 
                  <a href="{{url('/dashboard/body-type-edit')}}/{{$item->body_type_id}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                  </svg></a>    
                  <a href="{{url('/dashboard/body-type-delete')}}/{{$item->body_type_id}}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                    <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                  </svg></a>    
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <!-- End Table with stripped rows -->
    
        </div>
      </div>
</div>
    
@endsection