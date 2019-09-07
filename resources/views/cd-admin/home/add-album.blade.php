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
          <li class="active">Album</li>
        </ol>
    </section>

  
<div class="col-md-1" ></div>
  <section class="content col-md-10">

    
 <div class="box box-info" style="margin-top: 35px;">
          <div class="box-header with-border">
            <h3 class="box-title">Album </h3>
    <div class="box-body">
      <form method="POST" action="{{route('album.store')}}" enctype="multipart/form-data" >
        @csrf
              <div>
              <label for="image">Album Image</label>
              <input type="file" class="form-control-file" id="albumimage" name="albumimage"  >
            </div>
              <div class="form-group">
              <label for="Alt-image">Album Name</label>
              <input type="text" class="form-control" id="albumname" name="albumname" value="{{old('albumname')}}">
            </div>
            <div class="form-group">
              <label for="altimage">Alternative Image Name</label>
              <input type="text" class="form-control" id="altimage" name="altimage" value="{{old('altimage')}}">
            </div>
            <button type="submit" class="btn btn-default btn-flat bg-green ">Save Gallary</button>
          </form>
          </div>
        </div>
      </div>
    </section>
</div>
</div><!-- /.content-wrapper -->
@endsection