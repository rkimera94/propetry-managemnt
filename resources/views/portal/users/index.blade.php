@extends('layouts.portal2')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Property Mangement</h1>
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
      {{-- <p>
      <a href="{{ url('edu/education/tab_visualization') }}" class="btn btn-primary"> View Dashboard</a>
      </p>
       --}} 

      <p>
      <a href="{{ route('edu.property.create')}}" class="btn btn-primary"> CREATE NEW USER</a>
      <a href="{{route('propertyAttribute')}}" class="btn btn-primary"> VIEW USER BY ROLES</a>
      </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>FIRST NAME </th> 
          <th>LAST NAME</th>
          <th>STAFF ID</th>
          <th> MAIN ROLE</th>
          <th>STATION</th>
          <th>EMAIL</th>
          <th>TEL NO</th>
          <th>STATUS</th>
          <th>LAST LOGIN</th>
          <th>ACTION</th>

        </tr>
        {{-- @foreach ($users as $u )
          <tr>
            <td>{{ $u->first_name}}</td> 
            <td>{{ $u->last_name}}</td>
            <td>{{ $u->staff_id}}</td>
            <td>{{ $u->main_role}}</td>
            <td>{{ $u->station}}</td>
            <td>{{ $u->email}}</td>
            <td>{{ $u->phone_no}}</td>
            <td>{{ $u->status}}</td>
            <td>{{ $u->last_login}}</td>
            <td>
              <a href="{{ route('edu.property.edit', $c->id) }}" class="btn btn-info"> Edit</a>
              <a href="#" class="btn btn-danger "> Delete</a>

            </td>
          </tr>         
        @endforeach --}}
      </table>

    </div>
  </section>






    
@endsection



