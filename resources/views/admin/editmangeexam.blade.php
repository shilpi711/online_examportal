@extends('admin.master')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit </li>
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
                <h3 class="card-title">EDIT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{url('/updatemangeexam')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$c->id}}">

                
                <div class="card-body">
                  
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control"  placeholder="" value="{{$c->title}}">
                  </div>
                   
                  
                  
                  
                  
                   
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="update">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!--- end form------>
            
          </section>
        </div>


</div><!--content-wrapper end--->


@endsection