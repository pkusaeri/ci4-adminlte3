<?php

namespace App\Controllers;

class Ui extends BaseController
{
    public function index()
    {
    }
    public function buttons(){
        $data['title'] = 'Buttons';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/ui/buttons')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function general(){
        $data['title'] = 'General';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/ui/general')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function icons(){
        $data['title'] = 'Icons';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/ui/icons')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function modals(){
        $data['title'] = 'Modals';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/ui/modals')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function navbar(){
        $data['title'] = 'Navbar';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/ui/navbar')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function ribbons(){
        $data['title'] = 'Ribbons';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/ui/ribbons')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function sliders(){
        $data['title'] = 'Sliders';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/ui/sliders')
        .view('templates/dashboard/v1/footer',$data);
    }
    public function timeline(){
        $data['title'] = 'Timeline';
        return view('templates/dashboard/v1/header',$data)
        .view('templates/ui/timeline')
        .view('templates/dashboard/v1/footer',$data);
    }
}
