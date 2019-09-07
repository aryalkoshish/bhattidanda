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
        Booking
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Booking</li>
      </ol>
    </section>
     <div class="box box-info">
          <div class="box-header with-border">
    <section class="content">


              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>

                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-attachment">
                       <button class="button"><i class="fa fa-close" data-toggle="modal" data-target="#deleteModal"></i></button>
                      <button class="button"><a href="{{url('/home/read-mail')}}"> <i class="fa fa-eye "></i></button>
                      <button class="button"><a href="{{url('cd-admin\home\compose')}}"><i class="fa fa-reply"></i></button>
                    </td>
                    <td class="mailbox-date">15 hours ago</td>
                  </tr>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
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

<!-- <button type="button" class="fa fa-trash" data-toggle="modal" data-target="#myModal">Submit</button> -->

</div>
<!-- /.content-wrapper -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirmation</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
      </div>
    </div>

  </div>
</div>


@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">