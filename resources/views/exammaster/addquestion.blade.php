@extends("admin.master")
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
	function success()
      {

         alert("Add successfully");

      }
      </script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

</body>
</html>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">QUESTION</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">student</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!--table start--->

     <div class="card">

     	<div class="row">
     		<h4 style="display: inline;margin-left: 20px">
         @if($errors->any())
        @foreach($errors->all() as $error) <!-- /validation -->
         <p>{{$error}}</p>
         @endforeach 
          @endif
 
        </h4>


     		<button style="margin-left: 950px" type="button" class="btn btn-info" data-toggle="modal" data-target="#examplemodal">Add Questions</button>


     		<!-- Modal -->

        <div class="modal fade" id="examplemodal">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="examplemodallabel">Questions</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="close">
               <span aria-hidden="true">&times;</span>
             </button>
          </div>

       <div class="modal-body">
         
        <form method="post" action="{{url('savequestion')}}">

        @csrf

          <input type="hidden" name="id" value="{{$exam->id}} ">

        <div class="form-group">
        <label>Enter questions</label>
        <input type="text" name="question" class="form-control" placeholder="Enter questions">
        </div>


        <div class="form-group">
        <label>Enter option 1</label>
        <input type="text" name="option1" class="form-control" placeholder="Enter option 1">
        </div>


        <div class="form-group">
        <label>Enter option 2</label>
        <input type="text" name="option2" class="form-control" placeholder="Enter option 2">
        </div>
        
        <div class="form-group">
        <label>Enter option 3</label>
        <input type="text" name="option3" class="form-control" placeholder="Enter option 2">
        </div>

        <div class="form-group">
        <label>Enter option 4</label>
        <input type="text" name="option4" class="form-control" placeholder="Enter option 2">
        </div>

        <div class="form-group">
        <label>Enter right answers</label>
        <input type="text" name="answer" class="form-control"placeholder="Enter right Answers">
        </div>

        
      
         
        <button type="submit" class="btn btn-primary" >ADD</button>
       

       </form>

      </div>

    </div>
  </div>
  
</div>


     	</div>  <!--row closed-->


            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Question</th>
                  <th>Answers</th>
                  <th>Option1</th>
                  <th>Option2</th>
                  <th>Option3</th>
                  <th>Option4</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                 
                 
                 <tr>
                  

                @foreach($data as $datas)
                 <td>{{$datas->id}}</td>
                 <td>{{$datas->question}}</td> 
                 <td>{{$datas->answer}}</td>
                 <?php 
                  $opt = json_decode( $datas->option);
                  ?>
                  <td>{{$opt->option1}}</td>
                   <td>{{$opt->option2}}</td>
                    <td>{{$opt->option3}}</td>
                     <td>{{$opt->option4}}</td>


                 
                 

                 <td><input type="checkbox" name="status"></td>
                 <td>

                 	<a href="{{url('/editaddquestion/'.$datas->id)}}" class="btn btn-info"> Edit </a>
                 	<a href="{{url('/deletequestion/'.$datas->id)}}" class="btn btn-danger"> Delete</a>


                  </td>
                 
                  
                </tr>
                @endforeach
                
                
                
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>





       <!---table end--->     

</div>
@endsection