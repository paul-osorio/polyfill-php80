<?php

include  'app/core/DB.php';

class AuthenticationController
{
    public $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function login()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

        echo json_encode([
            'username' => $username,
            'password' => $password
        ]);

        $sql = "SELECT * FROM credentials WHERE username = :username";
        $stmt = $this->db->query($sql, [':username' => $username]);

        if ($stmt) {
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['bactigel'] = $user['id'];

                return true;
            }
        }

        return false;
    }
}
