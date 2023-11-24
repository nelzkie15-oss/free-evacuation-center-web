@extends('layouts.main')
@section('content')

         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-chart-pie"></span> Reports by Gender</h1>
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
                                      <th>Male</th>
                                      <th>Female</th>
                                      <th>All</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($gender as $row)
                                  <tr>
                                      <td>{{ $row->male }}</td>
                                      <td>{{ $row->female }}</td>
                                      <td>{{ $row->all }}</td>
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
                               <canvas id="chartjs-pie"></canvas>
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
      @endsection

      <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Pie chart
            new Chart(document.getElementById("chartjs-pie"), {
                type: "pie",
                data: {
                    labels: ["Male", "Female"],
                    datasets: [{
                        data: [ {{ $data['data']->male}}, {{ $data['data']->female }} ],
                        backgroundColor: [
                            window.theme.primary,
                            window.theme.danger,
                        ],
                        borderColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: true,
                    legend: {
                        display: true,
                        text: '{{ $data["title"] }}'
                    }
                }
            });
        
        });
        </script>