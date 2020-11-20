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
      <a href="{{ route('edu.property.create')}}" class="btn btn-primary"> CREATE NEW PROPETY</a>
      <a href="{{route('propertyAttribute')}}" class="btn btn-primary">ADD PROPERTY ATTRIBUTES</a>
      </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>PROPERTY NAME </th> 
          <th>PROPERTY TYPE </th>
          <th>NUMBER OF UNITS</th>
          <th>UNIT DESCRIPTION</th>
          <th>ADDRESS_1</th>
          <th>ADDRESSS_2</th>
          <th>ADDRESS_3</th>
          <th>VILLAGE</th>
          <th>ACTION</th>

        </tr>
        @foreach ($property as $c )
          <tr>
            <a href="#"><td>{{ $c->property_title}}</td> </a>
            <td>{{ $c->property_type}}</td>
            <td>{{ $c->number_units}}</td>
            <td>{{ $c->unit_description}}</td>
            <td>{{ $c->Address_1}}</td>
            <td>{{ $c->Address_2}}</td>
            <td>{{ $c->Address_3}}</td>
            <td>{{ $c->village}}</td>
            <td>
              <a href="{{ route('edu.property.edit', $c->id) }}" class="btn btn-info"> Edit</a>
              <a href="#" class="btn btn-danger "> Delete</a>

            </td>
          </tr>         
        @endforeach
      </table>

    </div>
  </section>






    
@endsection



