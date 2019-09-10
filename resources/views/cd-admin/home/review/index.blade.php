@extends('cd-admin.home-master')

    @section('page-title')  
    Home
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-md-12" >
       <section class="content-header">
        <h1>View Reviw</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">View review</li>
        </ol>
      </section>
      <div class="col-md-1"></div>
      <div class="col-md-10" style="margin-top: 25px;">
        <div class="box box-info">
          <div class="box-header with-border">
            <a href="{{route('review.create')}}"><button class="btn btn-default bg-green " >Add Review  
                </button></a>

          </div>
          
          <div class="box-body">
            @foreach($review as $r)
                <dl class="dl-horizontal">
                  <dt>Name</dt>
                  <dd>{{$r->name}}</dd>
                  <dt>Address</dt>
                  <dd>{{$r->address}}</dd>
                  <dt>status</dt>
                  <dd>
                    <form method="POST" action="{{route('review.status',$r->id)}}" >
                      @csrf
                      <div class="btn-group">
                       @if($r->status == 'active')
                       <button type="button" class="btn btn-success">{{$r->status}}</button>
                       @else
                       <button type="button" class="btn btn-danger">{{$r->status}}</button>
                       @endif
                       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      @if($r->status == 'active')
                      <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                        <li> <button class="btn btn-danger" type="submit">Inactive</button>
                        </li>
                      </div>
                      @else
                      <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                        <li> <button class="btn btn-success" type="submit">Active</button>
                        </li>
                      </div>
                      @endif
                    </div> 
                  </form>               
                </dd>
                <dt>Summary</dt>
                  <dd>{!!strip_tags(str_limit($r->summary,$limit='500'))!!}</dd>
                <dt>Action</dt>
                <dd>                          
                  <button class="btn btn-default btnupdate"  data-toggle="modal" data-target="#modal-edit{{$r->id}}"><i class="fa fa-edit"></i></button>

                  <button type="button" class="btn btn-default btnupdate" data-toggle="modal" data-target="#modal-view{{$r->id}}"><i class="fa fa-eye"></i> </button>

                  <button class="btn btn-default btnupdate" data-toggle="modal" data-target="#modal-delete{{$r->id}}"><i class="fa fa-trash"></i></button>
                  </dd>
                </dl>
                @endforeach
                {!! $review->links() !!}

        </div>
      </div>
    </div>
  </div>
@foreach($review as $r)
 <div class='container'>
      <div class="modal modal-default fade" id="modal-edit{{$r->id}}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reviews</h4>
              </div>
              <div class="modal-body">
                <h1 class="text text-center">Edit </h1>
                <form action="{{route('review.edit',$r->id)}}" method="POST">@csrf
                  <div class="form-group test1">
                    @if($r->status == 'active')
                    <button type="button" class="btn btn-success">{{$r->status}}</button>
                    @else
                    <button type="button" class="btn btn-danger">{{$r->status}}</button>
                    @endif
                  </div>
                  <div class="form-group test1">
                    <label>Your Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$r->name}}">
                  </div>
                  <div class="form-group test1">
                    <label>Address:</label>
                    <div class="form-group test1">
                      <input type="text" class="form-control" name="address" value="{{$r->address}}">
                    </div>
                  </div>          
                  <div class="form-group test1">
                    <label>Description:</label>
                    <textarea class="summernote" cols="80" rows="10" class="form-control" name="summary">{!! $r->summary !!}</textarea>
                  </div>
              <button class="btn btn-warning" type="submit">Update</button>
              <div class="btn btn-primary pull-right" data-dismiss='modal' >Cancel</div>
            </form>
              
              
          </div>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>
  <div class="modal modal-danger fade" id="modal-delete{{$r->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View</h4>
          </div>
          <div class="modal-body">
            <p>Do You Want To delete the Data</p>
          </div>
          <div class="modal-footer">
            <form method="POST" action="{{route('review.delete',$r->id)}}">
              <button type="submit" class="btn btn-default pull-right">Yes</button>
              @csrf
            </form>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-view{{$r->id}}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">View</h4>
            </div>
            <div class="modal-body">

              <div class="btn-group">
               @if($r->status == 'active')
               <button type="button" class="btn btn-success">{{$r->status}}</button>
               @else
               <button type="button" class="btn btn-danger">{{$r->status}}</button>
               @endif
             </div>

             <p><b>Your Name:: </b>{{$r->name}}</p>
             <br>
             <p><b>Your Address:: </b>{{$r->address}}</p>
             <br>
             <p><b>Your Views:: </b>{!! $r->summary !!}</p>
             <br>
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