@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header col-md-12">

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li class="active">Add Carousel</li>
    </ol>
  </section>
  <div class="col-md-1" ></div>
  <section class="content col-xs-10" style="margin-top: 35px;">
    <div class="box box-info">
      <div class="box-header with-border">
        <h1 style="text-align: center;">Add Carousel</h1>
        <form action="{{route('carousels.store')}}" method="post" enctype="multipart/form-data" >
          @csrf     
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('image')}}</div>
            <label for="image">Carousel</label>
            <input type="file" class="form-control-file" id="image" name="image"  >
          </div>
          <hr>
          <div class="form-group">
            <div class="text text-danger" >{{$errors->first('altimage')}}</div>
            <label for="Alt-image">Alternative Name</label>
            <input type="text" class="form-control" id="altimage" name="altimage" value="{{old('altimage')}}" >
          </div>
          <hr>
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('description')}}</div>
            <label for="description">Description</label>             
            <textarea id="summernote" rows="10" cols="80" name="description">
              {{old('description')}}
            </textarea>
          </div>
          <hr>
          <div class="form-group" >
            <div class="text text-danger">{{$errors->first('status')}}</div>
           <label for="status">Status</label>
           <div >
             <input type="radio" name="status" value="Active" >Active
           </div>
           <div>
             <input type="radio" name="status" value="Inactive">Inactive
           </div>
           <div class="form-group" >
             <button type="submit" class="btn btn-default btn-flat bg-green ">Save Image</button>
           </div>
         </div>
           </form>
           <div class="form-group" >
             <a href="{{URL()->previous()}}"> <button type="submit" class="btn btn-default bg-red ">Cancel</button></a>
           </div>
         </div>
         </div>
       </section>     
     </div>

     <!-- /.content-wrapper -->
     @endsection