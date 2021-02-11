@extends('student.studentmaster')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Password</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Password </li>
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
                <h3 class="card-title">EDIT PASSWORD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{url('/updatepassword')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">

                
                <div class="card-body">
                  
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control"  placeholder="" value="{{$data->password}}">
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