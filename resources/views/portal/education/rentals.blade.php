@extends('layouts.portal2')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Rentals</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/dataportal')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Management </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="conatiner-fluid">
      <p>
      <a href="{{ route('rentals')}}" class="btn btn-primary">Add Rental</a>
      </p>
      
      <table class="table table-bordered table-striped">
        <tr>
          <th>Property</th> 
          <th>Rental</th>
          <th>Price</th>
          <th>Currency</th>
          <th>Status</th>
          <th>Supervised by</th>
          <th>Contact</th>

        </tr>
 =
      </table>

    </div>
  </section>






    
@endsection



