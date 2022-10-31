<?php

namespace App\Controllers;


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
      session_start();
      session_destroy();
      // Redirect to the login page:
      header('Location: /');
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