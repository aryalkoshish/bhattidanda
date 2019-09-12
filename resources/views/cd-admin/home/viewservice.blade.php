    @extends('cd-admin.home-master')

    @section('page-title')  
    Home
    @endsection

    @section('content')
    <div class="content-wrapper">
    <!-- Content Wrapper. Contains page content -->
 <div class="Content col-xs-12" >
     <section class="content-header">
      
      <h1 style="text-align: center;"> View Service</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">View Service</li>
        </ol>
    </section>
        <section class="content">
          <div>
      <a href="{{route('service.create')}}"><button class="btn btn-default bg-green " >Add Service  
      </button></a>
    </div>
   
      <div class="row">
        
   

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Service Name</th>
                  
                  <th>Image</th>
                  <th>Alternative Image</th>
                  <th>Description</th>
                  <th>option</th>  
                </tr>
                </thead>
                <tbody>
                  @foreach($service as $s)
                <tr>
                  <td>{!!$s->name!!}</td>
                  
                  <td><img src="{{asset('imageuploadforservice/'.$s->image)}}" height="50px;"> </td>
                  <td>{!!$s->altimage!!}</td>
                  <td>{!! str_limit($s->description,$limits='5')!!}</td>
                  <td> 
                    <button class="btn btn-default btnupdate"  data-toggle="modal" data-target="#modal-edit{{$s->id}}"><i class="fa fa-edit"></i></button>

                    <button class="btn btn-default btnupdate" data-toggle="modal" data-target="#modal-delete{{$s->id}}"><i class="fa fa-trash"></i></button>

                    <button type="button" class="btn btn-default btnupdate" data-toggle="modal" data-target="#modal-view{{$s->id}}"><i class="fa fa-eye"></i></button>
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>
@foreach($service as $s)
<div id="modal-edit{{$s->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Service</h4>
      </div>

      <div class="modal-body">
        <form action="{{route('service.edit',$s->id)}}" method="POST" enctype="multipart/form-data" >
          @csrf
           <div class="form-group">
            <div class="form-group">
              <label for="Service name">Service Name</label>
              <input type="text" class="form-control" id="servicename" name="servicename" value="{{$s->name}}">
            </div>
            
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control-file" id="image" name="image"  >
            </div>
            <div class="form-group">
              <label for="Alt-image">Alt-image</label>
              <input type="text" class="form-control" id="altimage" name="altimage" value="{{$s->altimage}}">
              <label for="Description">Description</label>
            <!-- /.box-header -->
           <!--  <div class="box-body pad"> -->
             
                    <textarea class="summernote" name="description" rows="10" cols="80">
                      {!! $s->description !!}
                    </textarea>
              
            <!-- </div> -->
          
            </div>
            <button class="btn btn-warning" type="submit">Update</button>
            <div class="btn btn-primary pull-right" data-dismiss='modal' >Cancel</div>
      </div>

    </form>
    
        
            
      
    </div>

  </div>
</div>
</div>

<div class="modal modal-danger fade" id="modal-delete{{$s->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="text-align: center;">Delete service</h4>
        </div>
        <div class="modal-body">
          <p>Do You Want To delete the Data</p>
        </div>
        <div class="modal-footer">
          <form method="POST" action="{{route('service.delete',$s->id)}}">
            <button type="submit" class="btn btn-default pull-right">Yes</button>
            @csrf
          </form>
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-view{{$s->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="text-align: center;">View Service</h4>
        </div>
        <div class="modal-body">
          <div class="btn-group">
           @if($s->status == 'active')
           <button type="button" class="btn btn-success">{{$s->status}}</button>
           @else
           <button type="button" class="btn btn-danger">{{$s->status}}</button>
           @endif
         </div>
         <div>
           <b>Service Name::</b>{{$s->name}}</p>
         </div>
         
         <div>
           <p><b>Image::</b><img src="{{asset('/imageuploadforservice/'.$s->image)}}" style="height: 100px; width: 100px;"></p>
           <br>
         </div>
         
         <div>
           <p><b>Image Name::</b>{{$s->altimage}}</p>
           <br>
         </div>
         <div>
           <p><b>Description:: </b>{!!$s->description!!}</p>
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
@endforeach
    @endsection