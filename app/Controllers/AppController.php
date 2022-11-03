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
         $sql = "SELECT * FROM user_data ORDER BY date DESC ";
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

      public function getApiToDay(){

         $con = mysqli_connect("localhost", "root", "", "webapp");
     $response = array();
     $today = date("Y-m-d");

     if($con){
         $sql = "SELECT * FROM user_data WHERE user_data.date = '$today'" ;
         // WHERE user_id = {$_SESSION['id']}";
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
      public function addTask(){
       $conn = mysqli_connect("localhost", "root", "", "webapp");
      
       $name=$_POST['duree'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
      
       $sql = "INSERT INTO `user_data`( `work_time`, `h_rate`, `date`) 
       VALUES ('$name','$email','$phone')";
       if (mysqli_query($conn, $sql)) {
           echo json_encode(array("statusCode"=>200));
       } 
       else {
           echo json_encode(array("statusCode"=>201));
       }
       mysqli_close($conn);
   

return $this->view('add');
}

}
