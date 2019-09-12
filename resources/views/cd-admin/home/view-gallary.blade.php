@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
      <section class="content-header col-md-12">
      <h1>View Gallary </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
          <li >Gallary</li>
          <li class="active">album</li>
        </ol>
</section>

<section class="content">
<div class="container">
  @foreach($album as $a)
  <div class="row">
    <div class="col-md-3">
       
      <div  style="padding-top:20px"; > 
      Album Name: {{$a->albumname}} 
      </div>
      <div> 
        <img src="{{asset('public/upload/album/'.$a->albumimage)}}" style="height: 300px; width: 250px" >
      </div>
        <div>
         <a href="{{route('image.del',$a->id)}}"> <button type="button" class="btn btn-danger ">Delete</button> </a>

        <a href="{{route('image.show',$a->id)}}"><button type="button" class="btn  btn-info pull-left">View Images</button> </a>

        <a href="{{route('image.add',$a->id)}} ">  <button type="button" class="btn btn-success">Add Images</button> </a>
        
      </div>
      </div>
        @endforeach 
  </div>
</div>
</section>
 </div> 

 
<!-- /.content-wrapper -->
@endsection