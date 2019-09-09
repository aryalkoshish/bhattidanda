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

    <!-- Main content -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>


              <h3 class="box-title">{{$de->page}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>SEO Title</dt>
                <dd>{{$de->title}}</dd>
                <dt>SEO Keywords</dt>
                <dd>{{$de->keyword}}</dd>
                <dt>Description</dt>
                <dd>{{$de->description}}</dd>
                <dt>Action</dt>
                <dd> <div>
                  
                    <a href="{{route('edit.view.seo',$de->id)}}"><button type="button" class="btn btn-success">edit</button></a>
             </div>
                </dd>
              </dl>
             
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