<?php

namespace App\Controllers;


use App\models\User;
use App\models\Userdata;

use database\DBConnection;


class AppController extends Controller {




   public function loginPost() {
      
      $this->isAdmin();

      $user = (new User($this->getDB()))->getByEmail($_POST['email']);
          
      if (password_verify($_POST['password'], $user->password )) {

     $_SESSION['auth'] = $user->admin;
     $_SESSION['id'] = $user->id;
     return header('location: /dashboard?success=true');

      } else {

         return header('location: /');
      }
      
      }
      
   
      public function logout()
      {
     
        session_destroy();
       
        header('Location: /');
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

  
   public function getApi(){

         $con = mysqli_connect("localhost", "root", "", "webapp");
     $response = array();
     if($con){
         $sql = "SELECT * FROM user_data";
         //  WHERE user_id = {$_SESSION['id']}";
         $result = mysqli_query($con, $sql);
         if($result){
             $x = 0;
             while($row = mysqli_fetch_assoc($result)){
                 $response[$x]['id'] = $row['id'];
                 $response[$x]['user_id'] = $row['user_id'];
                 $response[$x]['h_rate'] = $row['h_rate'];
                 $response[$x]['work_time'] = $row['work_time'];
                 $response[$x]['date']= $row['date'];        
                 $x++;
             }
     echo json_encode($response, JSON_PRETTY_PRINT);
             }
     }else{
         echo "Database connection failed";
     }
      }
   
   }