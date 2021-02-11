@extends("student.studentmaster");
  @section('content');
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script>
      
      function success()
      {

         alert("Add successfully");

      }

    </script>
     
  </head>
  <body>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 " style="color: green;">Manage Student Exam</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!--table start--->

     <div class="card">

       
                  
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" style="background-color: #86d186;">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Exam Title</th>
                  <th>Exam date</th>
                  <th>Result</th>
                  <th>Status</th>
                  <th>Action</th>
                   
                </tr>
                </thead>


                <tbody>

                 <tr>
                 <td>1</td> 
                 <td>{{$exam->title}}</td>
                 <td>{{$exam->examdate}}</td> 
                 <td><?php
                        if($exam_join)
                        {
                          echo $exam_join->yes_ans. '/'.($exam_join->yes_ans+$exam_join->no_ans);
                        }



                        ?></td> 

                        
                 <td>

                  <?php


                      if(strtotime($exam->examdate)<strtotime(date('Y-m-d')))
                      {
                          echo "Completed";
                      }
                      else if(strtotime($exam->examdate)==strtotime(date('Y-m-d'))|| $examinfo->status=="started")
                      {
                         echo "Running";
                      } 
                      else
                      {
                        echo "pending";
                      }
                
                  ?>
                        
                      </td>
                      
                      <?php

                      if(strtotime($exam->examdate)==strtotime(date('Y-m-d')))
                      {
                        if(!$exam_join)
                        {

                         
                  ?>
                 <td>
                  

                  
                  

                  <a  class="btn btn-info join-exam-button"  onclick="window.open('studentjoinexam/{{$exam->id}}','_blank','height='+screen.availHeight+',width='+screen.availWidth+', toolbar=no, top=0,left=0,location=no,menubar=no, directories=no, status=no, menubar=no, scrollbars=yes,resizable=no')">Join Now</a>
                 </td>
                 <?php
                        }
               }
                 ?>

                  
                </tr>

                

                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
       <!---table end--->     

</div>
  
  </body>
  </html>
 
@endsection