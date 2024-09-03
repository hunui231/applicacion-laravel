<?php

namespace App\Http\Controllers;

use OpenAdmin\Admin\Facades\Admin;
use Illuminate\Routing\Controller as BaseController;

class ChartController extends BaseController
{
    public function index()
    
    {
        return Admin::content(function ($content) {
            $content->header('Chart Example');
            $content->description('Gráfico de ejemplo usando Chart.js');

            // Incluir la vista del gráfico
            $content->body(view('admin.charts.bar'));
        });
    }
}