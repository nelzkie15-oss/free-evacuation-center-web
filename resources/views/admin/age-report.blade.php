@extends('layouts.main')
@section('content')
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-chart-pie"></span> Reports by Age Bracket</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Reports</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered mytable"> 
                              <thead>
                                 <tr>
                                     <th>Age Bracket</th>
                                     <th>Number</th>
                                 </tr>
                             </thead>
                                    <tbody>
                                       <tr>
                                           <td>0 to 5</td>
                                           <td>22</td>
                                       </tr>
                                       <tr>
                                           <td>6 to 10</td>
                                           <td>5</td>
                                       </tr>
                                       <tr>
                                           <td>11 to 20</td>
                                           <td>10</td>
                                       </tr>
                                       <tr>
                                           <td>21 to 30</td>
                                           <td>15</td>
                                       </tr>
                                       <tr>
                                           <td>31 to 40</td>
                                           <td>10</td>
                                       </tr>
                                       <tr>
                                           <td>41 to 50</td>
                                           <td>8</td>
                                       </tr>
                                       <tr>
                                           <td>51 to 60</td>
                                           <td>9</td>
                                       </tr>
                                       <tr>
                                           <td>60 up</td>
                                           <td>5</td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="bargraph1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                  </div>
                  <!-- /.row -->
                  <!-- /.row (main row) -->
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- ./wrapper -->
      @endsection