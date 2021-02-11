@extends('portal.master')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Edit Exam Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>


  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
               <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                      <h3 style="color: blue;"> </h3>
                    </div>
                    <div class="col-sm-6">
                      <h3><span class="float-right" style="color: blue;">  </span></h3>
                    </div>
                </div>
                <form action="{{ url('portal/updatestudentinfo')}}" method="post" class="database_operation" style="background-color:#e9ecf4; ">
                  {{csrf_field()}}

                  <input type="hidden" name="id" value="{{$studentinfo->id}}">
                <div class="row">

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter Name</label>
                      
                        <input type="text" name="name" value="{{$studentinfo->name}} " class="form-control">
                      </div>  
                    </div>

                    

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter E-Mail</label>
                        <input type="email" name="email" value="{{$studentinfo->email}} " class="form-control">
                      </div>  
                    </div>

                    

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter DOB</label>
                        <input type="date" name="dob" value="{{$studentinfo->dob}}" class="form-control">
                      </div>  
                    </div>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter Mobile</label>
                        <input type="text" name="mobile" value="{{$studentinfo->mobile}} " class="form-control">
                      </div>  
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter Password</label>
                        <input type="text" name="password" value="{{$studentinfo->password}} " class="form-control">
                      </div>  
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <button class="btn btn-info">update</button>
                      </div>  
                    </div>
                </div>     
                   
              
            </div>
           </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>



</div><!----end content-wrapper-->


@endsection