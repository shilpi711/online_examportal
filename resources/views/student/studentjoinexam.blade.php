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
            <h1 class="m-0 " style="color: green;"> Join Exam Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
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
                <h3 class="card-title">Join Exam</h3>
              </div>
              <div class="card-body" style="background-color: #db2323;">
                <div class="row">
                  <div class="col-sm-4">
                    <h3>Time : 3 Hrs</h3>
                  </div>
                  <div class="col-sm-4"> 
                    
                    <h3 class="text-center">Time : 3:00:00</h3>

                  </div>
                  <div class="col-sm-4"> 

                    <h3 class="text-right">Status : Pending</h3>

                  </div>
               </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!--question------------------->

        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Question</h3>
              </div>

              <div class="card-body">
                <form method="post" action="{{url('student/submit_question')}}">
                  @csrf
                  <input type="hidden" name="exam_id" value="{{Request::segment(3)}} ">
                <div class="row">
                 @foreach($show as $key=>$value)

                  <?php 
                  $opt = json_decode( $value->option);
                  ?>

                  <div class="col-sm-12">

                   <p><b>{{$key+1}}. {{$value->question}}</b></p>
                   <input type="text" name="question{{$key+1}}" value="{{$value->id}}">
                    <ul class="question_option mt-4">

                      <li>
                        <input type="radio" value="{{$opt->option1}}"
                         name="answer{{$key+1}}">  {{$opt->option1}}
                      </li>
                      <li>
                        <input type="radio" value="{{$opt->option2}}"
                         name="answer{{$key+1}}">  {{$opt->option2}}
                      </li>
                      <li>
                        <input type="radio" value="{{$opt->option3}}" 
                        name="answer{{$key+1}}">   {{$opt->option3}}
                      </li>
                      <li>
                        <input type="radio" value="{{$opt->option4}}"
                         name="answer{{$key+1}}">  {{$opt->option4}}
                         
                       </li>
                        <li style="display: none">
                        <input type="radio" name="answer{{$key+1}}" value="0" checked="checked">
                      </li>
                    </ul>  

                  </div>
                  
                  @endforeach
                </div>

                  <div class="col-sm-12 mt-4">
                     <input type="hidden" name="index" value="">
                   
                   <button class="btn btn-info btn-block">Submit</button>

                  </div> 
        <!--endquestion--------------------->

    </div>
</div>
</div>
</div>
</div>
    
</div>
@endsection