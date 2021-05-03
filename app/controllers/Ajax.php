<?php

class Ajax
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function edit_user()
    {
        $id = $_POST['id'];
        $this->db->query("SELECT * FROM users WHERE id=$id");
        $user =  $this->db->result();
        echo json_encode($user);
    }
    public function edit_edu()
    {

        $id = $_POST['id'];
        $this->db->query("SELECT * FROM educations WHERE id_user=$id");
        $user =  $this->db->result();
        echo json_encode($user);
    }
    public function edit_empl()
    {

        $id = $_POST['id'];
        $this->db->query("SELECT * FROM employments WHERE id_user=$id");
        $user =  $this->db->result();
        echo json_encode($user);
    }
}
