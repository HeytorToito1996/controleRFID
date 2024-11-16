<?php include_once('./Controllers/EmployeeController.php');?>

<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

    $controller = new EmployeeController();

    if (isset($_POST['create'])){
        $name = $_POST['nome'];
        $surname = $_POST['sobrenome'];
        $email = $_POST['email'];
        $rfid = $_POST['rfid'];
        $controller->create_employee($name, $surname, $email, $rfid);
    }

    if(isset($_POST['delete'])){
        $id = $_POST['delete_id'];
        $controller->delete_employee($id);
    }

    $employees = $controller->get_employees();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro e Acesso de Funcionários</title>
    <link rel="stylesheet" href="./Static/css/style.css">
</head>
<body>
    <?php
        include_once('./Views/employee_list.php');
        include_once('./Views/employee_form.php');
    ?>
    
</body>
</html>

