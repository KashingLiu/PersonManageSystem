<?php
class login_model extends CI_Model {

    public function checkusrpwd($data)
    {
        $usrname = $data['username'];
        $passwrd = $data['password'];
        $this->load->database();
        $sql =  "SELECT * FROM user WHERE username='$usrname' AND password='$passwrd'";
        $query = $this->db->query($sql);
        if($query->result_array()){
            $this->load->library('session');
            $data = $query->result_array();
            $data = $data[0];
            var_dump($data['username']);
            $_SESSION['username'] = $data['username'];
            $this->session->set_userdata('username', $data['username']);
            $this->session->set_userdata('flag', $data['flag']);
            return 1;
        } else {
            return -1;
        }
    }
}