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
        <h1 style="text-align: center;"> Booking </h1>
        <form action="{{route('booking.store')}}" method="post"  >
          @csrf
          <div class="form-group">
            <label for="package name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
          </div>
         <div class="form-group">
          <label for="Email">Email</label>
          <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
          <label for="gender">gender</label>
          <input type="text" class="form-control" id="gender" name="gender" value="{{old('gender')}}">
        </div>
        <div class="form-group">
          <label for="age">age</label>
          <input type="text" class="form-control" id="age" name="age" value="{{old('age')}}">
        </div>
        <div class="form-group">
          <label for="location">location</label>
          <input type="text" class="form-control" id="location" name="location" value="{{old('location')}}">
        </div>
        <div class="form-group">
          <label for="contact">contact</label>
          <input type="text" class="form-control" id="contact" name="contact" value="{{old('contact')}}">
        </div>
        <div class="form-group">
          <label for="message">message</label>
          <input type="text" class="form-control" id="message" name="message" value="{{old('message')}}">
        </div>
        <div class="form-group">
          <input type="hidden" name="slug" value="{{$bok->slug}}">
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
