@extends('layouts.master')

@section('content')
    {{-- <div>
        <canvas id="myChart"></canvas>
    </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Estatísticas Gerais - Gráficos</div>

                    <div class="card-body">

                        <h1>{{ $chart1->options['chart_title'] }}</h1>
                        {!! $chart1->renderHtml() !!}

                        <hr />

                        <h1>{{ $chart2->options['chart_title'] }}</h1>
                        {!! $chart2->renderHtml() !!}

                        <hr />

                        <h1>{{ $chart3->options['chart_title'] }}</h1>
                        {!! $chart3->renderHtml() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    {!! $chart1->renderChartJsLibrary() !!}

    {!! $chart1->renderJs() !!}
    {!! $chart2->renderJs() !!}
    {!! $chart3->renderJs() !!}
@endsection
