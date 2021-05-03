<?php

class User_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        $id = $_SESSION['userdata']['id'];
        $this->db->query("SELECT * FROM users WHERE id = $id");
        return $this->db->result();
    }

    public function user_edt($data)
    {
        $id = $_SESSION['userdata']['id'];
        $query = "UPDATE users SET 
                email = :email,
                name=:name,
                address=:address,
                phone=:phone 
          WHERE id = $id";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('name', $data['nama']);
        $this->db->bind('address', $data['alamat']);
        $this->db->bind('phone', $data['hp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function education()
    {
        $id = $_SESSION['userdata']['id'];
        $this->db->query("SELECT * FROM educations WHERE id_user = $id");
        return $this->db->result();
    }
    public function edu_act($data)
    {

        $query = "INSERT INTO educations
            VALUES
            ('',:id_user,:name,:level,:start_date,:end_date)";
        $this->db->query($query);
        $this->db->bind('id_user', $_SESSION['userdata']['id']);
        $this->db->bind('name', $data['nama']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('start_date', $data['start']);
        $this->db->bind('end_date', $data['end']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function edu_edt($data)
    {
        $id = $_SESSION['userdata']['id'];
        $query = "UPDATE educations SET 
                name=:name,
                level=:level,
                start_date=:start_date,
                end_date=:end_date
          WHERE id_user = $id";

        $this->db->query($query);
        $this->db->bind('name', $data['nama']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('start_date', $data['start']);
        $this->db->bind('end_date', $data['end']);


        $this->db->execute();

        return $this->db->rowCount();
    }


    public function empl()
    {
        $id = $_SESSION['userdata']['id'];
        $this->db->query("SELECT * FROM employments WHERE id_user = $id");
        return $this->db->result();
    }
    public function empl_act($data)
    {
        $query = "INSERT INTO employments
            VALUES
            ('',:id_user,:employment_name,:level,:company,:start_date,:end_date)";
        $this->db->query($query);
        $this->db->bind('id_user', $_SESSION['userdata']['id']);
        $this->db->bind('employment_name', $data['nama']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('company', $data['company']);
        $this->db->bind('start_date', $data['start']);
        $this->db->bind('end_date', $data['end']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function empl_edt($data)
    {
        $id = $_SESSION['userdata']['id'];
        $query = "UPDATE employments SET 
                employment_name=:employment_name,
                level =:level,
                company=:company,
                start_date=:start_date,
                end_date=:end_date
          WHERE id_user=$id";

        $this->db->query($query);
        $this->db->bind('employment_name', $data['nama']);
        $this->db->bind('level', $data['level']);
        $this->db->bind('company', $data['company']);
        $this->db->bind('start_date', $data['start']);
        $this->db->bind('end_date', $data['end']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function user_del($data)
    {
        $id = $_SESSION['userdata']['id'];

        $this->db->query("DELETE FROM educations WHERE id_user = $id");
        $this->db->execute();
        $this->db->query("DELETE FROM employments WHERE id_user = $id");
        $this->db->execute();
        $this->db->query("DELETE FROM users WHERE id = $id");
        $this->db->execute();

        unset($_SESSION['userdata']);

        return $this->db->rowCount();
    }
    public function edu_del()
    {
        $id = $_SESSION['userdata']['id'];

        $this->db->query("DELETE FROM educations WHERE id_user = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function empl_del()
    {
        $id = $_SESSION['userdata']['id'];

        $this->db->query("DELETE FROM employments WHERE id_user = $id");
        $this->db->execute();
        return $this->db->rowCount();
    }
}
