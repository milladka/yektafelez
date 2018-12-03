<?php

  class Dashboard extends Controller {
    public function __construct(){

    }

    public function index(){
      $data = [
        'titlepage' => 'داشبورد'
      ];

      $this->view('dashboard/index', $data);
    }

    public function deposit(){
      // $mandehesab = $_SESSION['asrremain'];
      $data = [
        'titlepage' => 'واریز به حساب'
        // 'mandehesab' => $mandehesab
      ];

      $this->view('dashboard/deposit', $data);
    }
}
