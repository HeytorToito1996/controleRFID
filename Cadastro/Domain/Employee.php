<?php

class Employee{
    private $name;
    private $surname;
    private $email;
    private $rfid;

    public function __construct(string $name,string $surname,string $email,$rfid){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->rfid = $rfid;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_name($name){
        $this->name = $name;
    }

    public function get_surname(){
        return $this->surname;
    }

    public function set_surname($surname){
        $this->surname = $surname;
    }

    public function get_email(){
        return $this->email;
    }

    public function set_email($email){
        $this->email = $email;
    }

    public function get_rfid(){
        return $this->rfid;
    }


}

?>
