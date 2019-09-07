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
          <h3 class="box-title">{{$vi->name}}</h3>

          
        </div>
        <div class="box-body">
         <h4>Email :: {{$vi->email}}</h4>
         
           Gender :: {{$vi->gender}}</br>

           Age :: {{$vi->age}}</br>
           Location :: {{$vi->location}}</br>
           Contact :: {{$vi->contact}}</br>
         </p>
         <p>{{$vi->message}}</p>

        </div>
        <!-- /.box-body -->
        <div class="box-footer col-md-12 ">
          <div class="col-md-1" >
          <form action="{{route('booking.accept')}}" method="post" >
            @csrf
          <input type="hidden" name="id" value="{{$vi->id}}" >
          <input type="hidden" name="action" value="Replied">
          <input type="hidden" name="email" value="{{$vi->email}}">
          <input type="hidden" name="status" value="Accepted" >
          <button class="button" type="submit" ></a>Accepted</i></button>
          </form>
        </div>
        <div class="col-md-1" >
          <form action="{{route('reject.reply')}}" method="post" >@csrf
          <input type="hidden" name="id" value="{{$vi->id}}" >
          <input type="hidden" name="action" value="Replied">
          <input type="hidden" name="email" value="{{$vi->email}}">
          <input type="hidden" name="status" value="Rejected" >
          <button class="button" type="submit" ></a>Rejectted</i></button>
        </form>
        </div>
          <a href="{{URL()->previous()}}"> <button class="button pull-right "></a>Back</i></button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>

    @endsection