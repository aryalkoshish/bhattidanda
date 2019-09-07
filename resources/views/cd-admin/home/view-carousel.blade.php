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
    
    <h2 style="text-align: center;">Carousels</h2>
    
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">View Carousel</li>
    </ol>
  </section>
  <section class="content">
    
    
    
    <div>
      <a href="{{route('carousels.create')}}"><button class="btn btn-default bg-green " >Add Carousel  
      </button></a>
    </div>


    <div class="row">

      <!-- /.box -->

      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Alternative Name</th>
                <th>Status</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($carousel as $c)
              <tr>
                <td>{{$c->altimage}}</td>
                <td>
                  <form method="POST" action="{{route('carousel.status',$c->id)}}" >
                    @csrf
                    <div class="btn-group">
                     @if($c->status == 'active')
                     <button type="button" class="btn btn-success">{{$c->status}}</button>
                     @else
                     <button type="button" class="btn btn-danger">{{$c->status}}</button>
                     @endif
                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    @if($c->status == 'active')
                    <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                      <li> <button class="btn btn-danger" type="submit">Inactive</button>
                      </li>
                    </div>
                    @else
                    <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                      <li> <button class="btn btn-success" type="submit">active</button>
                      </li>
                    </div>
                    @endif
                  </div> 
                </form>  
              </td>
              <td>{!!str_limit($c->description,$limits='50')!!}</td>
              <td><img src="{{asset('public/upload/carousel/'.$c->image)}}" height="50px;"></td>
              <td><button class="btn btn-default btnupdate" data-toggle="modal" data-target="#modal-delete{{$c->id}}"><i class="fa fa-trash"></i></button>
                <button type="button" class="btn btn-default btnupdate" data-toggle="modal" data-target="#modal-view{{$c->id}}">
                  <i class="fa fa-eye"></i></button>
                  <button class="btn btn-default btnupdate"  data-toggle="modal" data-target="#modal-edit{{$c->id}}"><i class="fa fa-edit"></i></button>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

  </div>



</section>
</div> 
</div>

@foreach($carousel as $c)
<div class='container'>
  <div class="modal modal-default fade" id="modal-edit{{$c->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" style="text-align: center;">Edit Carousel</h4>
          </div>
          <div class="modal-body">
            
            <form action="{{route('up.carousel',$c->id)}}" method="POST" enctype="multipart/form-data" >

              <div class="btn-group">
               @if($c->status == 'active')
               <button type="button" class="btn btn-success">{{$c->status}}</button>
               @else
               <button type="button" class="btn btn-danger">{{$c->status}}</button>
               @endif
             </div>
             <div class="form-group test1">
              <label>Image Name:</label>
              <input type="text" class="form-control" name="altimage" value="{{$c->altimage}}">
            </div>
            <div class="form-group">
              <label for="image">Carousel</label>
              <input type="file" class="form-control-file" id="image" name="image"  >
            </div>         
            <div class="form-group test1">
              <label>Description:</label>
              <textarea id="summernote{{$loop->iteration}}" cols="80" rows="10" class="form-control" name="description">{!! $c->description !!}</textarea>
            </div>

            <button class="btn btn-warning" type="submit">Update</button>
            <div class="btn btn-primary pull-right" data-dismiss='modal' >Cancel</div>
            @csrf
          </form>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>

@endforeach
@foreach($carousel as $c)

<div class="modal modal-danger fade" id="modal-delete{{$c->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="text-align: center;">Delete Carousel</h4>
        </div>
        <div class="modal-body">
          <p>Do You Want To delete the Data</p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="{{route('remove.carousel',$c->id)}}">
            <button type="submit" class="btn btn-default pull-right">Yes</button>
            @csrf
          </form>
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>

        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@foreach($carousel as $c)

<div class="modal fade" id="modal-view{{$c->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="text-align: center;">View Carousel</h4>
        </div>
        <div class="modal-body">
          <div class="btn-group">
           @if($c->status == 'active')
           <button type="button" class="btn btn-success">{{$c->status}}</button>
           @else
           <button type="button" class="btn btn-danger">{{$c->status}}</button>
           @endif
         </div>
         <div>
           <p><b>Image::</b><img src="{{asset('/public/upload/carousel/'.$c->image)}}" style="height: 100px; width: 100px;"></p>
           <br>
         </div>
         <div>
           <p><b>Image Name::</b>{{$c->altimage}}</p>
           <br>
         </div>
         <div>
           <p><b>Description:: </b>{!!$c->description!!}</p>
           <br>
         </div>

       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
</div>

@endforeach
@endsection


