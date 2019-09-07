@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="Content col-xs-12" >
   <section class="content-header">

    <!-- <h1> Add Gallary</h1> -->
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Gallary</li>
    </ol>
  </section>

  
  <div class="col-md-1" ></div>
  <section class="content col-md-10">


   <div class="box box-info" style="margin-top: 35px;">
    <div class="box-header with-border">
      <h3 class="box-title">Add Image</h3>
      <form method="POST" action="{{route('images.store')}}" enctype="multipart/form-data" > 
        @csrf
      <div class="box-body">
        <div>
          <label for="image">Image</label>
          <input type="file" class="form-control-file" id="image" name="image"  >
        </div>
        <div class="form-group">
          <label for="Alt-image">Image Name</label>
          <input type="text" class="form-control" id="altimage" name="altimage" value="{{old('altimage')}}">
        </div>
        <div class="form-group" >
          <input type="hidden" name="albumid" value="{{$img->id}}">
        </div>
        
      
        <div>
          <button type="submit" class="btn btn-default btn-flat bg-green ">Save Gallary</button>
        </div>
      </div>
    </div>


  </section>     

</div>
</div>
<!-- /.content-wrapper -->
@endsection