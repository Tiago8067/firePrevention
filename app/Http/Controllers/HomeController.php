<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Intervention;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController extends Controller
{
    public function index()
    {
        $chart_options = [
            'chart_title' => 'Intervenções por Funcionário',
            'chart_type' => 'bar',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Intervention',

            'relationship_name' => 'user',
            'group_by_field' => 'name',
            /* 'group_by_field' => 'created_at',
            'group_by_period' => 'month', */
        ];

        $chart1 = new LaravelChart($chart_options);

        $chart_options2 = [
            'chart_title' => 'Intervenções por Veículo',
            'chart_type' => 'bar',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Intervention',

            'relationship_name' => 'veiculo',
            'group_by_field' => 'matricula',

            /* 'aggregate_function' => 'sum',
            'aggregate_field' => 'amount', */
        ];

        $chart2 = new LaravelChart($chart_options2);

        $chart_options3 = [
            'chart_title' => 'Número de Intervenções criadas',
            'chart_type' => 'line',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Intervention',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            /* 'aggregate_function' => 'sum',
            'aggregate_field' => 'amount', */
        ];

        $chart3 = new LaravelChart($chart_options3);
        //return $interventions;
        // return view('homePage.home', compact('interventions'));
        return view('homePage.home', compact('chart1', 'chart2', 'chart3'));
        // return view('tables.Graphics.graficos');
    }
}
