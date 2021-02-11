 @extends('student.studentmaster')
@section('content')
<style>
   .question_option>li{
    list-style: none;
    height: 50px;
    line-height: 50px;
   }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Join Exam Dashboard</h1>
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
              <div class="card-header">
                <h3 class="card-title">Name</h3>
              </div>
              <div class="card-body">
              	<h2>Basic Information</h2>
                 <table class="table">
                   <tr>
                      <td>Name</td>
                      <td>{{$student_info->name}}</td>
                    </tr> 
                    <tr>
                      <td>Email</td>
                      <td>{{$student_info->email}}</td>
                    </tr> 
                    <tr>
                      <td>D.O.B</td>
                      <td>{{$student_info->dob}}</td>
                    </tr>
     
<tr>
                      <td>Exam Name</td>
                      <td>{{$student_info->title}}</td>
                    </tr>
                    <tr>
                      <td>Exam Date</td>
                      <td>{{$student_info->exam_date}}</td>
                    </tr>  
                </table>
                <hr>
                <h2>Result Information</h2>

                <table class="table">
                   <tr>
                      <td>Pass Marks</td>
                      <td>{{$result_info->yes_ans}}</td>
                    </tr> 
                    <tr>
                      <td>Fail Marks</td>
                      <td>{{$result_info->no_ans}}</td>
                    </tr> 
                      <tr>
                      <td>Total</td>
                      <td>{{$result_info->yes_and+$result_info->no_ans}}</td>
                    </tr>  
                </table>
               
        <!--endquestion--------------------->

    </div>
</div>
</div>
</div>
</div>
    
</div>
@endsection