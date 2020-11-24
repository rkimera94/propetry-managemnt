@extends('layouts.portal2')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> CREATE NEW PROPERTY</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/dataportal')}}">Dashboard</a></li>
            <li class="breadcrumb-item active"> CREATE PROPERTY </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
    <div class="conatiner-fluid">
      <form method="post" action="{{ route('edu.property.store') }}" >
        @method('POST')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group"> 
                <div class="row">
                    <label class="col-md-3">PROPERTY TITLE </label>
                    <div class="col-md-6"><input type="text" placeholder="property title" name="property_title" class="form-control"></div>
                    <div class="clearfix"></div>

                </div>

                <div class="row">
                    <label class="col-md-3">PROPERTY TYPE</label>
                    <div class="col-md-6"><input type="text" name="property_type" class="form-control"></div>
                    <div class="clearfix"></div>

                </div>
                <div class="row">
                    <label class="col-md-3">NUMBBER OF RENTAL SPACES</label>
                    <div class="col-md-6"><input type="text" name="number_rental_spaces" class="form-control"></div>
                    <div class="clearfix"></div>

                </div>
                <div class="row">
                    <label class="col-md-3">RENTAL SPACE DESCRIPTION</label>
                    <div class="col-md-6"><input type="text" name="rental_space_description" class="form-control"></div>
                    <div class="clearfix"></div>
                </div>

        
                <div class="row">
                    <label class="col-md-3">ADDRESS 1</label>
                    <div class="col-md-6"><input type="text" name="Address_1" class="form-control"></div>
                    <div class="clearfix"></div>
                </div>
                
                <div class="row">
                    <label class="col-md-3">ADDRESS 2</label>
                    <div class="col-md-6"><input type="text" name="Address_2" class="form-control"></div>
                    <div class="clearfix"></div>
                </div>
            
                <div class="row">
                    <label class="col-md-3">ADDRESS 3</label>
                    <div class="col-md-6"><input type="text" name="Address_3" class="form-control"></div>
                    <div class="clearfix"></div>

                </div>
                </div>
                    <div class="row">
                    <label class="col-md-3">VILLAGE</label>
                    <div class="col-md-6"><input type="text" name="village" class="form-control"></div>
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



