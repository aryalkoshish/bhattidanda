@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
<section class="content-header">
      <h2>Images</h2>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"> View Gallary</li>  
          <li class="active"> View Image</li>  
        </ol>

</section>

<section class="content" style="margin-top: 35px;" >
  <div class="row">
    <div class="col-md-3">
        <img src="{{asset('\public\cd-admin\images\avatar5.png')}}">
        <div>
        <button type="button" class="btn btn-danger  ">Delete</button> 
         
      </div>
      </div>
          <div class="col-md-3">
        <img src="{{asset('\public\cd-admin\images\avatar5.png')}}">
        <div>
        <button type="button" class="btn btn-danger  ">Delete</button> 
        
      </div>
      </div>
          <div class="col-md-3">
        <img src="{{asset('\public\cd-admin\images\avatar5.png')}}">
        <div>
        <button type="button" class="btn btn-danger  ">Delete</button> 
        
      </div>
      </div>
        <div class="col-md-3">
        <img src="{{asset('\public\cd-admin\images\avatar5.png')}}">
        <div>
        <button type="button" class="btn btn-danger  ">Delete</button> 
        
      </div>
      </div>
 

  </div>
</section>
 </div> 

 
<!-- /.content-wrapper -->
@endsection