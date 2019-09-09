    @extends('cd-admin.home-master')

    @section('page-title')	
    Home
    @endsection

    @section('content')
    <div class="content-wrapper col-md-10 ">
    <!-- Content Wrapper. Contains page content -->
        <section class="content-header">
      <div><h2> SEO Detail</h2></div>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">SEO-package</li>
        </ol>
</section>
@foreach($data as $data)
    <!-- Main content -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>


              <h3 class="box-title">{{$data->page}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>SEO Title</dt>
                <dd>{{$data->title}}</dd>
                <dt>SEO Keywords</dt>
                <dd>{{$data->keyword}}</dd>
                <dt>Description</dt>
                <dd>{{$data->description}}</dd>
                <dt>Action</dt>
                <dd> <div>
                    <a href="{{route('seo.show',$data->id)}}"><button type="button" class="btn btn-success">view</button></a>
                    <a href="{{route('edit.view.seo',$data->id)}}"><button type="button" class="btn btn-success">edit</button></a>
             </div>
                </dd>
              </dl>
              @endforeach
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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