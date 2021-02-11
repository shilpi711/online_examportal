@extends('portal.master');
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 " style="color: red;">Update Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update</li>
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
                      <h3><span class="float-right" style="color: blue;"> </span></h3>
                    </div>
                </div>
                <form action="{{ url('portal/studentexaminfo')}}" method="" class="database_operation" style="background: #977fbc;">
                  {{csrf_field()}}

                  <input type="hidden" name="id" value=" ">
                <div class="row">

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter Exam</label>
                         <select name="exam" class="form-control">
                         	<option>select</option>
                         	@foreach($exam as $exams)
                         	<option value="{{$exams->id}}">{{$exams->title}} </option>
                         	@endforeach
                         </select>
                      </div>  
                    </div>

               

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter Mobile No</label>
                        <input type="text" name="mobile" class="form-control">
                      </div>  
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Enter DOB</label>
                        <input type="date" name="dob" class="form-control">
                      </div>  
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <button class="btn btn-info">Search</button>
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