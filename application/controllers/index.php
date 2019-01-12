<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function home() {
        $this->load->view('user_profile');
    }
    public function welcome() {
        $this->load->view('welcome_message');
    }
    public function login() {
        $this->load->model('login_model');
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $res=$this->login_model->checkusrpwd($data);
        if ($res == 1 || isset($_SESSION['username'])) {    // if user and password in the database then
            $this->load->library('session');
            $username = $_SESSION['username'];
            $data['username'] = $username;
            $flag = $_SESSION['flag'];
            if ($flag == 1) {   // judge the flag, if true then admin, if false then normal user
            $this->load->view('admin', $data);          // to admin
            } else $this->load->view('user', $data);    // to normal user
        } else {
            $this->load->view('login');
            echo "<script>alert(\"密码输入错误\")</script>";
        }
    }
}
