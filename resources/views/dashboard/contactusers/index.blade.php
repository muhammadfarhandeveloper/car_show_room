@extends('layout.adminlayout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Contact Users</h5>

          <div class="row">
            <div class="col-md-6">

              <form action="">
                <label for="">Search by name and Email</label>
                <div class=" input-group form-group mt-2">
                  <input type="text" name="search" id="" class="form-control" value="{{$search}}" placeholder="Searching...." aria-describedby="helpId">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </div>
            </div>
          </form>
<br>
          <!-- Table with stripped rows -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Area</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Postal Code</th>
              </tr>
            </thead>
            <tbody>

              @if ($data == null)
                  <h4 class="text-danger fw-bold">No Contact Users</h4>
              @endif

              @foreach ($data  as $item)
                
              <tr>
                <th scope="row">{{$item->contact_id}}</th>
                <td>{{$item->fullname}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->area}}</td>
                <td>{{$item->city}}</td>
                <td>{{$item->state}}</td>
                <td>{{$item->postalcode}}</td>
                
              </tr>

              @endforeach

            </tbody>
          </table>
          <!-- End Table with stripped rows -->
          
        </div>
      </div>
</div>
    
@endsection