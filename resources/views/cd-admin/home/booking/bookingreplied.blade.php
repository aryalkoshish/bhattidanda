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
      <h1>
        Booking Replied Messages
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Booking </li>
      </ol>
    </section>
     <div class="box box-info">
          <div class="box-header with-border">
    <section class="content">


              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    @foreach($data as $d)
                    
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">{{$d->email}}</a></td>
                    <td class="mailbox-subject"><b>{{$d->subject}}</b> 
                    </td>
                    <td class="mailbox-attachment">
                       <a href="{{route('show.reply',$d->id)}}"><button class="button"><i class="fa fa-eye" ></i></button>
                      
                    </td>
                    <td class="mailbox-date"></td>
                  </tr>
                  </tbody>
                  @endforeach
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
         
                <div class="pull-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </div>
    </section>

     </div>



@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">