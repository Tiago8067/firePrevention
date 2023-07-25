<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Fire Prevention</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin-assets/dist/css/adminlte.min.css') }}">
</head>

<body>
    @include('layouts.header')

    <div class="container">
        @yield('content')

        @yield('contentCreate')
        @yield('contentShow')
        @yield('contentEdit')
        @yield('contentDelete')
        @yield('contentTrash')

        @yield('contentCreateVehicle')
        @yield('contentShowVehicle')
        @yield('contentEditVehicle')
        @yield('contentDeleteVehicle')
        @yield('contentTrashVehicle')

        @yield('contentCreateFluid')
        @yield('contentShowFluid')
        @yield('contentEditFluid')
        @yield('contentDeleteFluid')
        @yield('contentTrashFluid')

        @yield('contentCreateIntervention')
        @yield('contentShowIntervention')
        @yield('contentEditIntervention')
        @yield('contentTrashIntervention')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const veiculoForm = document.getElementById('veiculo_dropdown');
            const veiculoIdSelect = document.getElementById('veiculosId');
            const loja = document.getElementById('viatura_ou_loja_loja');
            const cliente = document.getElementById('viatura_ou_loja_cliente');

            veiculoForm.style.display = 'none';

            cliente.addEventListener('click', function() {
                veiculoForm.style.display = 'block';
                veiculoIdSelect.required = true;
            });

            loja.addEventListener('click', function() {
                veiculoForm.style.display = 'none';
                veiculoIdSelect.required = false;
                veiculoIdSelect.value = "";
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin-assets/dist/js/adminlte.min.js') }}"></script>
    <!-- Chart Js -->

    @yield('javascript')

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the interventions per user data from the Blade template
            var interventionsPerCar = {"Loja":"2","12.AB.35":"4","12.AB.46":"1","12.AB.56":"2"};

            // Get the chart element
            var chartElement = document.getElementById('car-interventions-chart');

            // Create a new chart instance
            var userInterventionsChart = new Chart(chartElement, {
                type: 'bar',
                data: {
                    labels: Object.keys(interventionsPerCar),
                    datasets: [{
                        label: 'Intervenções por Veiculo',
                        data: Object.values(interventionsPerCar),
                        backgroundColor: 'rgba(0, 123, 255, 0.8)',
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1,
                        borderRadius: 5,
                        hoverBackgroundColor: 'rgba(0, 123, 255, 1)'
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    },
                    animation: {
                        duration: 2000,
                        easing: 'easeOutQuart'
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: 'Intervenções  por Veiculo',
                            font: {
                                size: 18
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            displayColors: false,
                            callbacks: {
                                title: function (tooltipItem) {
                                    return 'Veiculo: ' + tooltipItem[0].label;
                                },
                                label: function (tooltipItem) {
                                    var dataset = tooltipItem.datasetIndex;
                                    var index = tooltipItem.dataIndex;
                                    var value = userInterventionsChart.data.datasets[dataset].data[index];
                                    return 'Intervenções: ' + value;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> --}}

</body>

</html>
