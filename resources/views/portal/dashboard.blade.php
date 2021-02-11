@extends('portal.master');
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Portal Dashboard</h1>
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
       <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          @foreach($data as $datas)
           <?php
          // echo date('y-m-d');
          // echo"<br>";
          // echo $datas['examdate']
          if(strtotime(date('y-m-d'))>strtotime($datas['examdate']))

          {
              $cls="bg-danger";
          }
          else{
              $cls="bg-success";
          }
          ?>
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box {{$cls}}">
              <div class="inner">
                
                <h3>{{$datas->title}} </h3>

                <p>{{$datas->examdate}} </p>
                <p>{{$datas->category}} </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
             @if(strtotime(date('y-m-d'))< strtotime($datas['examdate']))
              
              <a href="{{url('portal/examform',$datas->id)}}"class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

              @endif

            </div>
          </div>
          @endforeach
          <!-- ./col -->
        </div>
      </div>




</div><!--content-wrapper-->

@endsection