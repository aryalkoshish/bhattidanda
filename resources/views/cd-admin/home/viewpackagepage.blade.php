@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header col-md-12">
    <h1> Pacakage</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li  >Package</li>
      <li class="active">{{$show->name}}</li>

    </ol>
  </section>

  <div class="col-md-1" ></div>
  <div class="Content col-md-10" style="margin-top: 35px;"  >
   <div class="box box-info ">
    <div class="box-header with-border">

      <section class="content">      
        <div>
          <h5>Package Name :: {{$show->name}}</h5>
          
          <h5>Alternative Image Name :: {{$show->altimage}}</h5>
          <h5>Description :: {{$show->description}}</h5>
          <h5>Status :: {{$show->status}}</h5>
          <h5>Image</h5><br>
          <img src="{{asset('public/upload/package/'.$show->image)}}" height="100px;"> 
        </div>
        <div>
          <a href="{{route('package.delete',$show->id)}}"><button type="button" class="btn btn-danger ">Delete</button> </a>      
        </div>


        <div class="form-group" >
         <a href="{{URL()->previous()}}"> <button type="submit" class="btn btn-default bg-yellow ">Back</button></a>
       </div>

     </section>
   </div>
 </div>
</div>



<!-- /.content-wrapper -->
@endsection