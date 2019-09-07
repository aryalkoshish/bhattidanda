    @extends('cd-admin.home-master')

    @section('page-title')  
    Home
    @endsection

    @section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Read Mail
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Booking</a></li>
        <li class="active">View-Mail</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">{{$view->name}}</h3>

          
        </div>
        <div class="box-body">
         <h4>{{$view->address}}</h4>
         <p>{{$view->message}}</p>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="{{URL()->previous()}}"> <button class="button pull-right ">Back</i></button></a>
          <button class="button"><a href="{{route('compose.mail',$view->id)}}">Reply</i></button></a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

    @endsection