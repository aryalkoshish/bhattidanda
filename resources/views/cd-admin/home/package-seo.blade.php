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

              <h3 class="box-title">SEO Description</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>SEO Title</dt>
                <dd>description</dd>
                <dt>SEO Keywords</dt>
                <dd>list Keyword</dd>
                <dt>Description</dt>
                <dd>SEO Description</dd>
                <dt>Action</dt>
                <dd> <div>
                    <button type="button" class="btn btn-default bg-green" data-toggle="modal" data-target="#myModal">Edit</button>
                    <button type="button" class="btn bg-red btn-flat margin">Delete</button> 
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Package SEO</h4>
      </div>
      <div class="modal-body">
            <div class="form-group">
              <label for="Alt-image">SEO-title</label>
              <input type="text" class="form-control" id="seo-title" name="seo-title" value="{{old('seo-title')}}">
            </div>
            <div class="form-group">
              <label for="seo-keyword">SEO-keyword</label>
              <input type="text" class="form-control" id="seo-keyword" name="seo-keyword" value="{{old('seo-keyword')}}">
            </div>
            <div>
              <label for="Description">Description</label>
            <!-- /.box-header -->
           <!--  <div class="box-body pad"> -->
             
                    <textarea id="summernote" name="editor1" rows="10" cols="80">
                      This is my textarea to be replaced with CKEditor.
                    </textarea>
              </div>
            <!-- </div> -->
          
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
      </div>
    </div>

  </div>
</div>
    @endsection