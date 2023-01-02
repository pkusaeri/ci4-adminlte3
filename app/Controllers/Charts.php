<?php

namespace App\Controllers;

class Charts extends BaseController
{
    public function index()
    {
        $data['title'] = 'Chartjs';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/chart/chartjs')
        .view('templates/dashboard/v1/footer');
    }
    public function chartjs(){
        $data['title'] = 'Chartjs';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/chart/chartjs')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function flot(){
        $data['title'] = 'Flot';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/chart/flot')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function inline(){
        $data['title'] = 'Inline';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/chart/inline')
        .view('templates/dashboard/v1/footer'.$data);
    }
    public function uplot(){
        $data['title'] = 'uPlot';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/chart/uplot')
        .view('templates/dashboard/v1/footer',$data);
    }
}
