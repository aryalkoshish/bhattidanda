    @extends('cd-admin.home-master')

    @section('page-title')  
    Home
    @endsection

    @section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Read booked
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Booking</a></li>
        <li class="active">View-booked</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{$vi->email}}</h3>

          
        </div>
        <div class="box-body">
         
         <pre>
            Subject :: {{$vi->subject}}
            Message :: {{$vi->message}}         
            Status :: {{$vi->action}}
          </pre>
          <a href="{{URL()->previous()}}"> <button class="button pull-right "></a>Back</i></button>

        </div>
      
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

    @endsection