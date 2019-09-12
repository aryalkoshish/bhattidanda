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
        <h1 style="text-align: center;"> Add About</h1>
        <form action="{{route('insertabout')}}" method="post" enctype="multipart/form-data" >
          @csrf
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('name')}}</div>
            <label for="package name"> Name</label>
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
          <div class="text text-danger">{{$errors->first('pdffile')}}</div>
          <label for="image">PDF file</label>
          <input type="file" class="form-control-file" id="pdffile" name="pdffile"  >
        </div>

        <div class="form-group">
          <div class="text text-danger">{{$errors->first('videolink')}}</div>
          <label for="Videolonk">Video link</label>
          <input type="text" class="form-control" id="videolink" name="videolink" value="{{old('videolink')}}">
        </div>
         
        <div class="form-group">
          <div class="text text-danger">{{$errors->first('tagline')}}</div>
          <label for="Alt-image">Tagline</label>
          <input type="text" class="form-control" id="tagline" name="tagline" value="{{old('tagline')}}">
        </div>


        <div class="form-group">
          <div class="text text-danger">{{$errors->first('description')}}</div>
          <label for="Description">Description</label>
          <!-- /.box-header -->
          <textarea class="summernote" rows="10" cols="80" name="description" >
           This is my textarea to be replaced with CKEditor.
         </textarea>
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
