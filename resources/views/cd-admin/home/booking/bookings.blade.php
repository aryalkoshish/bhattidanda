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
                      @foreach($sa as $s)

                    <td>
                   <?php $test =  App\bookingstatus::where('bookingid',$s->id)->get()->first();
                    
                   ?>
                
                    </td>
                    <td>
                      <?php $t = App\bookingreplies::where('bookingid',$s->id)->get()->first();
                      ?>

                      @if($t['action']=='Replied')
                      
                      {{$t['action']}}
                    
                      @elseif($test['reply']=='Replied')

                      {{$test['status']}}

                      @else

                      Not Replied                     
                
                      @endif
                    </td>
                    <td class="mailbox-name"><a href="read-mail.html">{{$s->name}}</a></td>
                    <td class="mailbox-subject"><b>{{$s->email}}</b> {{$s->contact}}
                    </td>
                     
                    <td class="mailbox-attachment">
                      
                      <button class="button"><a href="{{route('show.booking',$s->id)}}"> <i class="fa fa-eye "></i></button>
                      <button class="button"><a href="{{route('booking.compose',$s->id)}}"><i class="fa fa-reply"></i></button>
                    </td>
                    <td class="mailbox-date">
                      <?php $date = Carbon\Carbon::parse($s->created_at);
                     $now = Carbon\Carbon::now('Asia/Kathmandu');
                      $diff = $date->diffForHumans($now);
                      ?>
                      {{$diff}}
                    </td>
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