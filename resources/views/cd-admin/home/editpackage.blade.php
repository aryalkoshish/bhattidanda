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
        <h1 style="text-align: center;"> Edit Package</h1>
        <form action="{{route('editpackage.store',$show->id)}}" method="post" enctype="multipart/form-data" >
          @csrf
          <div class="form-group">
            <div class="text text-danger">{{$errors->first('name')}}</div>
            <label for="package name">Package Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$show->name}}">
          </div>
          
          <div class="form-group">

           <label for="image">Image</label>
           <div class="text text-danger">{{$errors->first('image')}}</div>
           <input type="file" class="form-control-file" id="image" name="image"  >
         </div>
         <div class="form-group">
          <div class="text text-danger">{{$errors->first('altimage')}}</div>
          <label for="Alt-image">Alternative Image</label>
          <input type="text" class="form-control" id="altimage" name="altimage" value="{{$show->altimage}}">
        </div>

        <div class="form-group">
          <label for="Description">Description</label>
          <!-- /.box-header -->
          <div class="text text-danger">{{$errors->first('description')}}</div>
          <textarea class="summernote" rows="10" cols="80" name="description" >
           {!! $show->description !!}
         </textarea>
       </div> 
       <div class="form-group" >
       <label for="status">Status</label>
       <div class="radio">
                    <label>
                      <input type="radio" name="status"  value="active"{{$show->status=='Active'?'checked':''}}>Active<br>
          
                      <input type="radio" name="status"  value="inactive"{{$show->status=='inactive'?'checked':''}} >Inactive<br>
                    </label>
                  </div>
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
