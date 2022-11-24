<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('Home/index');
    }

    public function Admin()
    {
        $data = [];
        if (isset($_POST['login'])) {
            // Login submitted
            if (isset($_POST['email']) && isset($_POST['passwd'])) {
                $model = $this->model('AdminLoginModel');
                $rows = $model->getStaffUserCredentials($_POST['email']);
                if ($rows && ($rows->num_rows > 0)) {
                    $row = $rows->fetch_assoc();
                    $role = $row['role'];
                    if (password_verify($_POST['passwd'], $row['password_hash'])) {
                        $_SESSION['login'] = true;
                        $_SESSION['role'] = $row['role'];
                        $_SESSION['name'] = $row['first_name'] . ' ' . $row['last_name'];
                        header("location:" . URLROOT . "/$role");
                        die();
                    } else {
                        $data['message'] = 'wrongpass';
                    }
                } else {
                    $data['message'] = 'nouser';
                }
            }
        }
        $this->view('Login/Admin', $data);
    }

    public function Logout()
    {
        if (isset($_SESSION['login']))
            unset($_SESSION['login']);
        if (isset($_SESSION['role']))
            unset($_SESSION['role']);
        if (isset($_SESSION['name']))
            unset($_SESSION['name']);
        header('location:Home/index');
    }
}