<?php

namespace App\Controllers;


use App\models\User;
use App\models\Userdata;

use database\DBConnection;


class AppController extends Controller {

   public function index()
   { 
     

      return $this->view('auth.login');
   }


   public function loginPost() {
      
      $this->isAdmin();

      $user = (new User($this->getDB()))->getByEmail($_POST['email']);
          
      if (password_verify($_POST['password'], $user->password )) {

     $_SESSION['auth'] = $user->admin;
     return header('location: /dashboard?success=true');

      } else {

         return header('location: /');
      }
      
      }
      
   
      public function logout()
      {
        session_start();
        session_destroy();
        // Redirect to the login page:
        header('Location: /');
      }


    public function login()
    {

    }

    public function dashboard()
    {
      $this->isAdmin();
       return $this->view('app.dashboard');
    }

    public function calendar()
    {
      $this->isAdmin();
       return $this->view('app.calendar');
    }

    public function history()
    {
      $this->isAdmin();
       return $this->view('app.history');
    }

    public function MyApi()
      {
         $this->isAdmin();

         $test = (new Userdata($this->getDB()))->getAll();
         header('Content-Type: application/json');
         echo json_encode($test, JSON_PRETTY_PRINT);
      }

}