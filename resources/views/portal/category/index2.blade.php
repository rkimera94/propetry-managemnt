@extends('layouts.portal2')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Property Management</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/dataportal')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Categories </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="conatiner-fluid">
      <p>
      <a href="{{ route('admin.category.create')}}" class="btn btn-primary"> Add new metadata</a>
      <a href="{{ route('admin.category.create')}}" class="btn btn-primary"> Add new metadata Value</a>
      </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>id</th>
          <th>metadata</th>
          <th>MetadataDescription</th>
          <th>Action</th>
        </tr>
        @foreach ($metadata as $c )
          <tr>

            <td>{{ $c->id}}</td>
            <td>{{ $c->metadata}}</td>
            <td>{{ $c->MetadatadDescription}}</td>

            <td> 
              <a href="{{ route('admin.category.edit', $c->id) }}" class="btn btn-info"> Edit</a>
                <a href="#" class="btn btn-danger "> Delete</a>

            </td>
          </tr>
           

            
        @endforeach
      </table>

    </div>
  </section>






    
@endsection



