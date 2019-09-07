@extends('cd-admin.home-master')

@section('page-title')	
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
  <div class="container col-md-12">
    <section class="content-header">

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Package</li>
      </ol>
    </section>
    <div class="col-md-1" ></div>
    <div class="Content col-md-10" style="margin-top: 35px;"  >
     <div class="box box-info ">
      <div class="box-header with-border">
        <h1 style="text-align: center;"> Add Package</h1>
        <form action="{{route('store.package')}}" method="post" enctype="multipart/form-data" >
          @csrf
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('name')}}</div>
            <label for="package name">Package Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
          </div>
          
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('image')}}</div>
           <label for="image">Image</label>
           <input type="file" class="form-control-file" id="image" name="image"  >
         </div>
         <div class="form-group">
          <div class="text text-danger">{{$errors->first('altimage')}}</div>
          <label for="Alt-image">Alternative Image</label>
          <input type="text" class="form-control" id="altimage" name="altimage" value="{{old('altimage')}}">
        </div>

        <div class="form-group">
          <div class="text text-danger">{{$errors->first('description')}}</div>
          <label for="Description">Description</label>
          <!-- /.box-header -->
          <textarea class="summernote" rows="10" cols="80" name="description" >
           This is my textarea to be replaced with CKEditor.
         </textarea>
       </div>
       <div class="form-group">
        

      <div class="form-group" >
        <div class="text text-danger">{{$errors->first('status')}}</div>
       <label for="status">Status</label>
       <input type="radio" name="status" value="active">Active
       <input type="radio" name="status" value="inactive">Inactive
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

</div>
<!-- /.content-wrapper -->
@endsection
