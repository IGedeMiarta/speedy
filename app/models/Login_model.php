<?php

class Login_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }



    public function regist($data)
    {

        $query = "INSERT INTO users
            VALUES
            ('',:email,:password,:name,:address,:phone)";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind('name', $data['nama']);
        $this->db->bind('address', $data['alamat']);
        $this->db->bind('phone', $data['hp']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
