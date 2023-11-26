<script src="{{ asset('asset/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('asset/js/adminlte.js') }}"></script>
<script src="{{ asset('asset/js/chart.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('asset/tables/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('asset/tables/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('asset/tables/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>s
<script src="{{ asset('asset/tables/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script>
   $(function () {
      $("#example1").DataTable();
   });
</script>




{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {

        var barChartData = {
            labels: ["Barangay 1","Barangay 2","Barangay 3","Barangay 4","Barangay 5","Barangay 6","Barangay 7","Barangay 8","Barangay 9","Barangay 10"],
            datasets: [{
                label: 'Evacuees',
                backgroundColor: 'rgb(79,129,189)',
                borderColor: 'rgba(0, 158, 251, 1)',
                borderWidth: 1,
                data: [22,5,10,15,10,8,9,5,7,9]
            }]
        };

        var ctx = document.getElementById('bargraph').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    display: false,
                }
            }
        });

    });
</script> --}}

{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {

        // Bar Chart

        var barChartData = {
            labels: ["0 to 5","6 to 10","11 to 20","21 to 30","31 to 40","41 to 50","51 to 60","60 up"],
            datasets: [{
                label: 'Evacuees',
                backgroundColor: 'rgb(79,129,189)',
                borderColor: 'rgba(0, 158, 251, 1)',
                borderWidth: 1,
                data: [22,5,10,15,10,8,9,5]
            }]
        };

        var ctx = document.getElementById('bargraph1').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    display: false,
                }
            }
        });

    });
</script> --}}

{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Pie chart
        new Chart(document.getElementById("chartjs-pie2"), {
            type: "pie",
            data: {
                labels: ["Flood", "Typhoon", "Earthquake"],
                datasets: [{
                    data: [25,50,25],
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
</script> --}}

<script>
    document.addEventListener("DOMContentLoaded", function () {

        // Bar Chart

        var barChartData = {
            labels: ["Center 1","Center 2","Center 3","Center 4","Center 5"],
            datasets: [{
                label: 'Evacuees',
                backgroundColor: 'rgb(79,129,189)',
                borderColor: 'rgba(0, 158, 251, 1)',
                borderWidth: 1,
                data: [25,15,25,30,13]
            }]
        };

        var ctx = document.getElementById('bargraph2').getContext('2d');
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    display: false,
                }
            }
        });

    });
</script>

</body>
</html>
