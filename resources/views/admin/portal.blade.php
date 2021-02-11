@extends("admin.index");
@section('content')


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <script>
      
      function success()
      {

         alert("Add successfully");

      }

    </script>
</head>
<body>

<!--modal-->
<div class="modal fade" id="exampleModal">

  
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModallable">Add STUDENT</h5>

                <button type="button" class="close" data-dismiss="modal" arial-label="close">
                    <span aria-hidden="true">&times;</span>
                    </button>
         </div>

                    <div class="modal-body">
                        <!-- <h1>hello</h1> -->
            
                                <form  action="{{url('/dataportal')}}" method="post" enctype="multipart/form-data">
                            @csrf
                <div class="form-group">
        <label> Name</label>
        <input type="text" name="name" class="form-control">
        </div>

         <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
        </div>

         <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" class="form-control">
        </div>

         

         <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control">
        </div>
       
            
            
            
            <button type="submit" class="btn btn-primary">Add</button>
      @if($errors->any())
               @foreach($errors->all() as $error)
                     <p style=" color: red;">{{$error}}</p>
              @endforeach 


               @endif 

        </form>

                        </div>

            
        </div>

        
    </div>
    
</div>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">PORTAL</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new
</button>

</a>

</li>
              
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Password</th>
                  
                  <th>Status</th>
                  
                  
                  
                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)

                 <tr>
                   
                 <td>{{$data->id}}</td>
                 <td>{{$data->name}}</td>
                 <td>{{$data->email}}</td>
                 <td>{{$data->mobile}}</td>
                 <td>{{$data->password}}</td>
                 
                 <td><input type="checkbox" name="status"></td>
                 
                 
                 
                 <td>
                  
                  <button class="btn btn-info"><a href="{{url('/editportal/'.$data->id)}}" style="color: white">Edit</button>
                  <button class="btn btn-danger"><a href="{{url('/deleteportal/'.$data->id)}}" style=" color: white;">Delete</a></button>
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

</body>
</html>
@endsection
    


