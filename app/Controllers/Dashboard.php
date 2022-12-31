<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
  public function index()
  {
    $data['title'] = 'Dashboard';
    return view('templates/header',$data)
    // .view('templates/navbar')
    .view('templates/sidebar')
    .view('templates/content')
    .view('templates/footer');
    
  }
  public function v1(){
    $data['title'] = 'Dashboard';
    return view('templates/dashboard/v1/header',$data)
    // .view('templates/dashboard/v1/navbar')
    // .view('templates/dashboard/v1/sidebar')
    .view('templates/dashboard/v1/index')
    .view('templates/dashboard/v1/footer');
  }
}
