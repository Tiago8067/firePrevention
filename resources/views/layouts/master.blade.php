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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
    </script>

</body>

</html>
