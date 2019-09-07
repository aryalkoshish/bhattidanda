@extends('cd-admin.home-master')

@section('page-title') 
Home
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="container col-xs-12">

   <section class="content-header">

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Add review</li>
    </ol>
  </section>
  <div class="col-md-1" ></div>
  <div class="col-md-10" style="margin-top: 35px;">
    <div class="box box-info">
      <div class="box-header with-border">
        <h1 style="text-align: center;">Add review</h1>

        <form action="{{route('review.store')}}" method="post" >
          @csrf
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('name')}}</div>
            <label for="name">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('address')}}</div>
            <label for="Address">Your Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
          </div>
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('summary')}}</div>
            <label for="summary">Your Views</label>             
            <textarea class="summernote" rows="10" cols="80" name="summary"  >
             {{old('summary')}}
           </textarea>
         </div>
         <div class="form-group" >
           <label for="status">Status</label><br>
           <input type="radio" name="status" value="active">Active
           <br>
           <input type="radio" name="status" value="inactive" >Inactive
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-default bg-green " >Submit</button>
         </div>
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