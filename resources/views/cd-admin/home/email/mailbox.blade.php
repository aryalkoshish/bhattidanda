@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <div class="container col-xs-11">
       
       <section class="content-header">
      <h1>
        Mailbox
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>
    <section class="content" >
                    



              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    @foreach($mails as $m)
                  <tr>
                    <td><input type="checkbox"></td>

                    
                    <td class="mailbox-name"><a href="read-mail.html">{{e($m->name)}}</a></td>
                    <td class="mailbox-subject"><b>{{e($m->address)}}
                    </td>
                    <td class="mailbox-attachment">
                      <div>
                      <form method="post" action="{{route('delet.mail',$m->id)}}" >@csrf
                       <button class="button" type="Submit"><i class="fa fa-trash"></i></button>
                    </form>
                    <button class="button"><a href="{{route('compose.mail',$m->id)}}"> <i class="fa fa-reply"></i></button>
                    <button class="button"><a href="{{route('view.mail',$m->id)}}"> <i class="fa fa-eye"></i></button>

                  </div>
                    </td>
                    <td class="mailbox-date">15 hours ago</td>
                  </tr>   
                  @endforeach

                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding col-xs-11">
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
    </section>

     </div>

<!-- <button type="button" class="fa fa-trash" data-toggle="modal" data-target="#myModal">Submit</button> -->

</div>
<!-- /.content-wrapper -->



@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">