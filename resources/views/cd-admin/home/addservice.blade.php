@extends('cd-admin.home-master')

@section('page-title') 
Home
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header col-xs-12"> 

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">add service</li>
  </ol>
</section>
<div class="col-md-1"></div>
<div class="col-md-10" style="margin-top: 35px;">
  <div class="box box-info ">
    <div class="box-header with-border">
      <h1 style="text-align: center;" > Add Service</h1>
      <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
         <div class="text text-danger">{{$errors->first('servicename')}}</div>
         <label for="Service name">Service Name</label>
         <input type="text" class="form-control" id="servicename" name="servicename" value="{{old('servicename')}}">
       </div>
       
       <div class="form-group">
         <div class="text text-danger">{{$errors->first('image')}}</div>
         <label for="image">Image</label>
         <input type="file" class="form-control-file" id="image" name="image"  >
       </div>
       <div class="form-group">
         <div class="text text-danger">{{$errors->first('altimage')}}</div>
         <label for="Alt-image">Alternative Image Name</label>
         <input type="text" class="form-control" id="altimage" name="altimage" value="{{old('altimage')}}">
       </div>
       <div class="form-group">
         <div class="text text-danger">{{$errors->first('description')}}</div>
         <label for="Description">Description</label>
         <!-- /.box-header -->
         <!--  <div class="box-body pad"> -->
          <textarea class="summernote" name="description" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor.
          </textarea>
          <!-- </div> -->
        </div>
        <div class="form-group" >
         <div class="text text-danger">{{$errors->first('status')}}</div>
         <label for="status">Status</label>
         <input type="radio" name="status" value="Active">Active
         <input type="radio" name="status" value="Inactive" >Inactive
       </div>
       <button type="submit" class="btn btn-default bg-green " >Submit</button>
     </form>
     <div class="form-group" >
       <a href="{{URL()->previous()}}"> <button type="submit" class="btn btn-default bg-red ">Cancel</button></a>
     </div>
   </div>
 </div>
</div>
</div>
<!-- /.content-wrapper -->



@endsection