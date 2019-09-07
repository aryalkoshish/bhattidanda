    @extends('cd-admin.home-master')

    @section('page-title')	
    Home
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-md-12" >
       <section class="content-header">

        <h1> View Package</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">View Package</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <!-- /.box -->

            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Package Name</th>
                      
                      <th>Description</th>
                      <th>Status</th>
                      <th>Action</th>
                      


                    </tr>
                  </thead>
                  <tbody>

                    @foreach($view as $v)
                    <tr>
                      <td>{{$v->name}}</td>
                      
                      <td>{!! str_limit($v->description,$limits='5')!!}</td>
                      <td>
                       <form method="POST" action="{{route('package.status',$v->id)}}" >
                        @csrf
                        <div class="btn-group">
                         @if($v->status == 'active')
                         <button type="button" class="btn btn-success">{{$v->status}}</button>
                         @else
                         <button type="button" class="btn btn-danger">{{$v->status}}</button>
                         @endif
                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        @if($v->status == 'active')
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
                  </td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-success">Action</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{route('show.packagepage',$v->id)}}">View</a></li>
                    <li><a href="{{route('view.edit.package',$v->id)}}">Edit</a></li>
                    <li><a href="{{route('package.delete',$v->id)}}">Delete</a></li>
                    
                    
                  </ul>
                </div>
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



 

    @endsection