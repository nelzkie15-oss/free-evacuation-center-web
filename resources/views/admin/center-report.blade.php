@extends('layouts.main')
@section('content')
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-chart-pie"></span> Reports by Barangay</h1>
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
                                     <th>Center</th>
                                     <th>Number</th>
                                 </tr>
                             </thead>
                                    <tbody>
                                       <tr>
                                           <td>Center 1</td>
                                           <td>25</td>
                                       </tr>
                                       <tr>
                                           <td>Center 2</td>
                                           <td>10</td>
                                       </tr>
                                       <tr>
                                           <td>Center 3</td>
                                           <td>25</td>
                                       </tr>
                                       <tr>
                                           <td>Center 4</td>
                                           <td>30</td>
                                       </tr>
                                       <tr>
                                           <td>Center 5</td>
                                           <td>10</td>
                                       </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="bargraph2"></canvas>
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
      <!-- jQuery -->
      @endsection