<?php

namespace App\Controllers;

use App\Models\Model;
use App\models\User;
use App\models\Userdata;

use database\DBConnection;


class AppController extends Controller
{



    public function connect()
    {
        return mysqli_connect("localhost", "root", "", "webapp");
    }

    public function loginPost()
    {
        $user = (new User($this->getDB()))->getByEmail($_POST['email']);
        if (password_verify($_POST['password'], $user->password)) {
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

    //full api
    public function getApi()
    {
        $con = $this->connect();
        $response = array();
        if ($con) {
            $sql = "SELECT * FROM user_data WHERE user_data.user_id = '1' ORDER BY date DESC";
            //  WHERE user_id = {$_SESSION['id']}";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $x = 0;
               
                while ($row = mysqli_fetch_assoc($result)) {
                    $worktime = $row['work_time'];
                    $response[$x]['id'] = $row['id'];
                    $response[$x]['user_id'] = $row['user_id'];
                    $response[$x]['h_rate'] = $row['h_rate'];
                    $response[$x]['work_time'] = substr($worktime,0,-3);
                    $response[$x]['date'] = $row['date'];
                    $x++;
                }
                echo json_encode($response, JSON_PRETTY_PRINT);
            }
        } else {
            echo "Database connection failed";
        }
    }

    //day api
    public function getApiToDay()
    {
        $con = $this->connect();
        $response = array();
        $today = date("Y-m-d");

        if ($con) {
            $sql = "SELECT * FROM user_data WHERE user_data.date = '$today'";
            // WHERE user_id = {$_SESSION['id']}";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $x = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $worktime = $row['work_time'];
                    $response[$x]['id'] = $row['id'];
                    $response[$x]['user_id'] = $row['user_id'];
                    $response[$x]['h_rate'] = $row['h_rate'];
                    $response[$x]['work_time'] = substr($worktime,0,-3);
                    $response[$x]['date'] = $row['date'];
                    $x++;
                }
                echo json_encode($response, JSON_PRETTY_PRINT);
            }
        } else {
            echo "Database connection failed";
        }
    }


    public function getApiWeek()
    {
        $con = $this->connect();
        $response = array();
        $week = date("W");
        if ($con) {

            $sql = " SELECT WEEK(date) id, user_id, h_rate, work_time, date, created_at, updated_at FROM user_data  WHERE WEEK(date) = '$week' ";
            // WHERE user_id = {$_SESSION['id']}";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $x = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $worktime = $row['work_time'];
                    $response[$x]['id'] = $row['id'];
                    $response[$x]['user_id'] = $row['user_id'];
                    $response[$x]['h_rate'] = $row['h_rate'];
                    $response[$x]['work_time'] = substr($worktime,0,-3);
                    $response[$x]['date'] = $row['date'];
                    $x++;
                }
                echo json_encode($response, JSON_PRETTY_PRINT);
            }
        } else {
            echo "Database connection failed";
        }
    }

    public function getApiMonth()
    {
        $con = $this->connect();
        $response = array();
        $month = date("m");

        if ($con) {
            $sql = "SELECT MONTH(date) id, user_id, h_rate, work_time, date, created_at, updated_at FROM user_data WHERE MONTH(date) = '$month'";
            // WHERE user_id = {$_SESSION['id']}";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $x = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $worktime = $row['work_time'];
                    $response[$x]['id'] = $row['id'];
                    $response[$x]['user_id'] = $row['user_id'];
                    $response[$x]['h_rate'] = $row['h_rate'];
                    $response[$x]['work_time'] = substr($worktime,0,-3);
                    $response[$x]['date'] = $row['date'];
                    $x++;
                }
                echo json_encode($response, JSON_PRETTY_PRINT);
            }
        } else {
            echo "Database connection failed";
        }
    }

    public function addTask()
    {
        $con = $this->connect();
        $duree = $_POST['duree'];
        $taux = $_POST['taux'];
        $date = $_POST['date'];


        $sql = "INSERT INTO `user_data`( `work_time`, `h_rate`, `date`) 
        VALUES ('$duree','$taux','$date')";
        if (mysqli_query($con, $sql)) {
            echo json_encode(array("statusCode" => 200));
        } else {
            echo json_encode(array("statusCode" => 201));
        }
        mysqli_close($con);

        //return $this->view('add');
    }
}
