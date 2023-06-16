<?php


class DBImplementation
{
    private $conn;
    private $url = "localhost";
    private $dbname = "authentication";
    private $username = "root";
    private $password = "";

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:hst=$this->url;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e)
        {
            echo "Connection Failed" . $e->getMessage();
            die("Exiting.....");
        }

    }

    public function allusers()
    {
        $st=$this->conn->prepare("select * from user");
        $st->execute(array());
        $rows=$st->fetchAll();
        return $rows;
    }
    public  function insertdata($username,$email)
    {
        function rand_string( $length ) {

            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            return substr(str_shuffle($chars),0,$length);
        }
        $password=rand_string(8);
        $st=$this->conn->prepare("insert into user (user_id, username, password, email) VALUES (NULL ,?,?,?);");
        $st->execute(array($username,$password,$email));
    }
    public function  delete_record($user_id)
    {
        $st=$this->conn->prepare("delete from user WHERE user_id=? ");
        $st->execute(array($user_id));
        if($st->rowCount()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function  getoneuser($user_id)
    {
        $st=$this->conn->prepare("select * from user WHERE user_id=? ");
        $st->execute(array($user_id));
        $rows=$st->fetchAll();
        return $rows;

    }
    public function  updatetdata($user_id,$username,$email)
    {
        $st=$this->conn->prepare("update user set username=?,email=? where user_id=?;");
        $st->execute(array($username,$email,$user_id));

    }

}