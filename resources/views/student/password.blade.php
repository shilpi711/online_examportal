@extends('student.studentmaster')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Change password</h1>
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
        

     <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  
                  <th>Password</th>
                  
                  
                  
                  
                  
                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    

                 <tr>
                   
                 <td>{{$data->id}}</td>
                 <td>{{$data->password}}</td>
                 
                
                 
                 
                 
                 
                 
                 <td>
                  
                  <button class="btn btn-info"><a href="{{url('/editpassword/'.$data->id)}}" style="color: white">Edit</button>
                  
                </td>
                </tr>
                

               
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>






       <!---table end--->     

</div>
</div>

</body>
</html>

    



@endsection