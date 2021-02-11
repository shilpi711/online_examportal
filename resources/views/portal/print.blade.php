@extends('portal.master')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
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
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <div>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <h1 style="width:fit-content; font-family: 'Abril Fatface', cursive; color: #e9ecf4; ;font-size: 100%" >ONLINE EXAM PORTAL 
        </h1>
    </div>
                </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <div class="row" style="margin-left: 2%" >

                    <div class="col-md-12">
                      <div class="form-group">
                         <i class='fas fa-user-circle'>
                          <label> NAME:</label>
                          {{$data->name}}</i>

                       </div>  
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <i class='fas fa-id-card-alt'>
                            <label> E-Mail:</label>
                            {{$data->email}}</i>


                      </div>  
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                         <i class='fas fa-id-card-alt'>
                          <label>Mobile No:</label>
                          {{$data->mobile}}</i>
                      </div>  
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                         <i class='fas fa-key'>
                          <label>DOB:</label>
                          {{$data->dob}}</i>

                      </div>  
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                         <i class='fas fa-id-card-alt'>
                          <label>Exam:</label>
                          {{$exam->title}}</i>

                      </div>  
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <i class='fas fa-id-card-alt'>
                        <label>Exam date:</label>      
                         {{$exam->examdate}}</i>

                      </div> 
                      <button onclick="window.print()" class="btn btn-info">print</button>  
                    </div>
 

                  
                   
              
            </div>
           </form>
           
            </div>
            
            <!-- /.card -->
            <!--- end form------>
            
          </section>
        </div>


</div><!--content-wrapper end--->


@endsection