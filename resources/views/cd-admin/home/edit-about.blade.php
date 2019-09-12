@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="Content col-md-12 " >
    <section class="content-header">

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">About Us</li>
      </ol>
    </section>
    <div class="col-md-1"></div>
    <div class="box box-info" style="margin-top: 35px;">



        <div class="box box-solid">
          <div class="box-header with-border">
            <div class="col-md-10" > 
              <section class="content ">
                <h2 style="text-align: center;" > About Us</h2>
                <div>
                  <label>Name::</label>
                  {{ $about->name }}
                </div>
                <div>
                  <label>Alternitive Image Name::</label>
                  {{$about->altimage}}
                </div>
                <div>
                  <label>Description::</label>
                  {!!strip_tags($about->description,'<p>')!!}
                </div>
                <div>
                  <label>video ::</label>
                  {{$about->video_link}}
                </div>
                <div>
                  <label>NameTagline::</label>
                  {{$about->tagline}}
                </div>
                <div>
                  <label>Image ::</label>
                  <img src="{{asset('image_upload/'.$about->image)}}" style="height:100px;">
                </div>
                <div>
                  <label>PDF::</label>
                  <a href="{{asset('fileupload/'.$about->pdf_file)}}"><button type="button" class="btn btn-default bg-green">File</button></a>
                  <div>
                <button type="button" class="btn btn-default bg-red " data-toggle="modal" data-target="#myModal{{$about->id}}">Edit</button>
              </div>
              </section>  
            </div>
          </div>
        </div>
      
    </div>
  </div>

</div>
<!-- /.content-wrapper -->
</div>

<div id="myModal{{$about->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit About Us</h4>
      </div>
      <form method="POST" action="{{route('updateabout',$about->id)}}" enctype="multipart/form-data" >
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $about->name }}">
          </div>
          <div class="form-group">
            <label for="alt_Image">alternative Image</label>
            <input type="text" class="form-control" id="altimage" name="altimage" value="{{$about->altimage}}">
          </div>
          <div class="form-group">
            <label for="tagline">Tagline</label>
            <input type="text" class="form-control" id="tagline" name="tagline" value="{{$about->tagline}}">
          </div>
          <div class="form-group" >
            <label for="Video_link"> Video link</label>
            <input type="text" name="video_link" id="video_link" value="{{$about->video_link}}">
          </div>
          <div class="form-group" >
            <label for="Image">Image</label>
            <input type="file" name="image" id="image" value="{{old('image')}}">
          </div>
          <div class="form-group">
            <label for="pdf" >Your pfd file</label>
            <input type="file" name="pdf" id="pdf" value="{{old('pdf')}}" >
          </div>
          <div>
            <label for="Description">Description</label>
            <!-- /.box-header -->
            <!--  <div class="box-body pad"> -->

              <textarea class="summernote" name="description" rows="10" cols="80">
                {!! $about->description !!}
              </textarea>
              
              <!-- </div> -->

            </div>
            <button class="btn btn-warning" type="submit">Update</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    @endsection