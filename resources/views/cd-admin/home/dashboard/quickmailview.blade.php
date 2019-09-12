    @extends('cd-admin.home-master')

    @section('page-title')	
    Home
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-md-12" >
       <section class="content-header">

        <h1> Quick mail</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Quick mail</li>
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
                      <th>Email</th>
                      
                      <th>Subject</th>
                      <th>Message</th>
                      <th>View
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($view as $v)
                    <tr>
                      <td>{{$v->email}}</td>
                      <td>{{$v->subject}}</td>
                      
                      <td>{!!str_limit($v->message,$limits='15')!!}</td>
                      <td> 
                        <a href="{{route('show.quickreply',$v->id)}}"> <button class="button pull-right ">View</i></button>
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