@extends('admin.master')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Question</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Manager</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!--- add form ------>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Question</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{url('/updatequestion')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$data->id}} ">
                
                <div class="card-body">
                  
                  <div class="form-group">
                    <label>Question</label>
                    <input type="text" name="question" value="{{$data->question}} " class="form-control"  placeholder="">
                  </div>

                  <?php 
                  $opt = json_decode( $data->option);
                  ?>

                   <div class="form-group">
                    <label>Option 1</label>
                    <input type="text" name="option1" value="{{$opt->option1}} " class="form-control"  placeholder="">
                  </div>

                   <div class="form-group">
                    <label>Option 2</label>
                    <input type="text" name="option2" value="{{$opt->option2}} " class="form-control"  placeholder="">
                  </div>

                   <div class="form-group">
                    <label>Option 3</label>
                    <input type="text" name="option3" value="{{$opt->option3}} " class="form-control"  placeholder="">
                  </div>

                   <div class="form-group">
                    <label>Option 4</label>
                    <input type="text" name="option4" value="{{$opt->option4}} " class="form-control"  placeholder="">
                  </div>

                  <div class="form-group">
                    <label>Answer</label>
                    <input type="text" name="answer" value="{{$data->answer}}" class="form-control"  placeholder="">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="update">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!--- end form------>
            
          </section>
        </div>


</div><!--content-wrapper end--->


@endsection