@extends('layouts.main')
@section('content')
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-chart-pie"></span> Reports by Calamity</h1>
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
                           <table class="table table-hver custom-table mb-0 datatable">
                              <thead>
                                  <tr>
                                      <th>Calamity</th>
                                      <th>Number</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($evinfocountcalamity as $row)
                                 <tr>
                                     <td>{{ $row->type_of_calamity }}</td>
                                     <td>{{ $row->Countofcalamitytype }}</td>
                                 </tr>
                                 @endforeach
                              </tbody>
                          </table>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                      <div class="card">
                          <div class="card-body">
                              <div class="chart chart-lg">
                               <canvas id="chartjs-pie2"></canvas>
                           </div>
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

      <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Pie chart
            new Chart(document.getElementById("chartjs-pie2"), {
                type: "pie",
                data: {
                    labels: <?php echo '['. substr($calamityName,18)?>,
                    datasets: [{
                        data: <?php echo '['. substr($calamityCount,19)?>,
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.danger,
                            window.theme.warning,
                        ],
                        borderColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: true,
                    legend: {
                        display: true,
                    }
                }
            });
    
        });
    </script>
    