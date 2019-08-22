<?php

include_once "Db_connect.php";

class database
{
    public $PDO;
    public $conn;
    public $data;

    public function __construct()
    {
        $this->PDO = new Db_connect();
        $this->PDO->connect();
        $this->conn = $this->PDO->connect;

    }

    public function create($email, $username, $pass)
    {
        $this->data = $this->conn->prepare ("INSERT INTO `user` (email,username, pass) VALUES(:email,:username,:pass); ");
        $this->data->bindParam(":email", $email);
        $this->data->bindParam(":username", $username);
        $this->data->bindParam(":pass", $pass);
        $this->data->execute();

    }
    public function check($username, $pass){
        $sql = "SELECT*FROM  `user` WHERE username='$username' AND pass='$pass'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetch();
        if ($result == 0) {
            echo '<p style=color:red >Sai username hoac password</p>';
        }else{
            $_SESSION['username']=$username;
            $_SESSION['pass']=$pass;
            header('location: chao_mung.php' );

        }

    }
}