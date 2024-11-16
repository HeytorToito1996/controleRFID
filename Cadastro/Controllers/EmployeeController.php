<?php include_once(__DIR__ . '/../Models/EmployeeModel.php');?>


<?php

class EmployeeController{
    private $employeeModel;

    public function __construct(){
        $this->employeeModel = new EmployeeModel();
    }   

    public function create_employee($name, $surname, $email, $rfid){
        $this->employeeModel->create_employee($name, $surname, $email, $rfid);
    }

    public function get_employees(){
        return $this->employeeModel->get_employees();
    }

    public function delete_employee($id){
        $this->employeeModel->delete_employee($id);
    }

}

?>