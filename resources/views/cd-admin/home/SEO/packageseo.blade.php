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
        <li class="active">Add  SEO</li>
      </ol>
    </section>
    <div class="col-md-1" ></div>
    <div class="Content col-md-10" style="margin-top: 35px;"  >
     <div class="box box-info ">
      <div class="box-header with-border">
        <h1 style="text-align: center;"> Add About</h1>
        <form action="{{route('insert.seo')}}" method="post"  >
          @csrf

          <div class="form-group" >
        <div class="text text-danger">{{$errors->first('page')}}</div>
       <label for="page">page</label><div>
       <input type="radio" name="page" value="package">package
       <input type="radio" name="page" value="booking">booking
     </div>
   </div>
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('title')}}</div>
            <label for="package name">Title</label>
            <input type="text" class="form-control" id="" name="title" value="{{old('title')}}">
          </div>

        <div class="form-group">
          <div class="text text-danger">{{$errors->first('keyword')}}</div>
          <label for="Alt-image">Keyword</label>
          <input type="text" class="form-control" id="keyword" name="keyword" value="{{old('keyword')}}">
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
