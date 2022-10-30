<?php

namespace App\Controllers;

use database\DBConnection;

class AppController extends Controller {

   public function index()
   {
      return $this->view('app.login');
   }

    public function login()
    {
    

    }
   
    public function logout()
    {
      echo "logout";
    }


    public function dashboard()
    {
       return $this->view('app.dashboard');
    }

    public function calendar()
    {
       return $this->view('app.calendar');
    }

    public function history()
    {
       return $this->view('app.history');
    }

}