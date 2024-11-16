<?php include_once(__DIR__ .'/../Domain/Employee.php'); ?>
<?php include_once(__DIR__ .'/../Config/Connection.php'); ?>

<?php
    class EmployeeModel{
        private $connection;
        public function __construct(){
            $this->connection = (new Connection())->conectar();
        }
        public function create_employee($name,$surname,$email,$rfid){
            $employee = new Employee($name,$surname,$email,$rfid);
            // Database operations
            $sql = "INSERT INTO employees (firstname,surname,email,rfid) VALUES (?,?,?,?)";
            // Execute the SQL query
            $statement = $this->connection->prepare($sql);
            $statement->execute([$employee->get_name(), $employee->get_surname(), $employee->get_email(), $employee->get_rfid()]);
        }

        public function get_employees(){
            $sql = "SELECT * FROM employees";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            $employees = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $employees;
        }

        public function delete_employee($id){
            $sql = "DELETE FROM employees WHERE id =?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);
        }
    }
?>