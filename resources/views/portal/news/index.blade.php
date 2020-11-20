@extends('layouts.portal2')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">News</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/dataportal')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">News </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="conatiner-fluid">
      <p>
      <a href="{{ route('admin.news.create')}}" class="btn btn-primary"> Add new News</a>
      </p>
      <table class="table table-bordered table-striped">
        <tr>
          <th>id</th>
          <th>title</th>
          <th>Action</th>
        </tr>
        @if (count($news))
        @foreach ($news  as $n )
          <tr>

          <td>{{ $n->id}}</td>
            <td>{{ $n->title}}</td>

            <td> 
            <a href="{{ route('admin.news.edit', $n->id) }}" class="btn btn-info"> Edit</a>
              <a href="#" class="btn btn-danger "> Delete</a>

            </td>
          </tr>
           

            
        @endforeach
        @else 
        <tr><td colspan="3"> No news found </td></tr>

        @endif
      </table>

    </div>
  </section>






    
@endsection



