@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
      <section class="content-header col-md-12">
      <h1> Images</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
          <li >Gallary</li>
          <li>album</li>
          <li class="active">images</li>
        </ol>
</section>

<section class="content">

  <div class="row" style="height: 100px; margin-top: 35px;" >
    @foreach($image as $i) 
    <div class="col-md-3">
      
    <div>
      
      <div class="col-md-4">
        Image Name:{{$i->altimage}}
        <img src="{{asset('public/upload/image/'.$i->image)}}" height="300px">
        <button type="button" class="btn btn-danger ">Delete</button> 
      </div>
      </div>
        
      </div>
        @endforeach 
  </div>
</section>
</div>

 
<!-- /.content-wrapper -->
@endsection