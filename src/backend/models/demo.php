<?php

class Demo
{
    private $id;
    private $name;
    private $email;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect(); //accedemos a la base de datos
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $this->db->real_escape_string($name);
    }

    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    /* METODOS */

    public function save()
    {
        $sql = "INSERT INTO users VALUES(null, '{$this->getName()}', '{$this->getEmail()}')";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    public function edit()
    {
        $sql = "UPDATE users SET name='{$this->name}', email='{$this->email}' ";
        $sql .= " WHERE id={$this->id};";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }
    public function delete()
    {
        $sql = "DELETE FROM users WHERE id={$this->getId()}";
        $delete = $this->db->query($sql);
        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }
    public function getDemo()
    {
        $users = $this->db->query('SELECT * FROM users');
        return $users;
    }
    public function getDemoOne()
    {
        $user = $this->db->query("SELECT * FROM users WHERE id={$this->getId()}");
        return $user->fetch_object();
    }

}