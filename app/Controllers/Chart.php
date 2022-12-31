<?php

namespace App\Controllers;

class Chart extends BaseController
{
    public function index()
    {
        $data['title'] = 'Chartjs';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/chart/chartjs')
        .view('templates/dashboard/v1/footer');
    }
}
