<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/app/models/Database.php";
class Auth {
    protected $db;
    public function __construct() {
        $this->db = new mysqli("localhost", "root", "", "tm_blog");
    }

    public function check_email($email) {
        $EMAIL_SQL = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = $this->db->query($EMAIL_SQL);
        return ($result->num_rows == 1) ? true : false;
    }

    public function verify_email() {

    }

    public function register($data) {

    }

    public function login($data) {

    }

    public function logout() {

    }
}

$auth = new Auth();
echo $auth->check_email("john@mail.ru");
