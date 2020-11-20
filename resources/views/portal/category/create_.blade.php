@extends('layouts.portal2')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Add news</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/dataportal')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Add news</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="conatiner-fluid">
      <form method="post" action="{{ route('admin.news.store') }}" >
        @method('POST')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group"> 
          <div class="row">
            <label class="col-md-3">Title</label>
            <div class="col-md-6"><input type="text" name="title" class="form-control"></div>
            <div class="clearfix"></div>

          </div>

        </div>


        <div class="form-group"> 
          <div class="row">
            <label class="col-md-3">Title</label>
            <div class="col-md-6"><input type="text" name="title" class="form-control"></div>
            <div class="clearfix"></div>

          </div>

        </div>

        <div class="form-group"> 
          <div class="row">
            <label class="col-md-3">Author</label>
            <div class="col-md-6"><input type="text" name="author" class="form-control"></div>
            <div class="clearfix"></div>

          </div>

        </div>

        <div class="form-group"> 
          <div class="row">
            <label class="col-md-3">Description</label>
            <div class="col-md-6">
              <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="clearfix"></div>

          </div>

        </div>


        <div class="form-group">
          <input type="submit" class="btn btn-info" value="Save">

        </div>

      </form>
    

    </div>
  </section>






    
@endsection



