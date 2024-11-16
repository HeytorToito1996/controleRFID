<h2>Lista de Funcionários</h2>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>RFID</th>
        </tr>
        <?php foreach ($employees as $employee){?>
            <tr>
                <td><?php echo $employee['firstname']; ?></td>
                <td><?php echo $employee['surname']; ?></td>
                <td><?php echo $employee['email']; ?></td>
                <td><?php echo $employee['rfid']; ?></td>
                <td>
                    <form action="./app.php" method="post">
                        <input type="hidden" name="delete_id" value="<?php echo $employee['id']; ?>">
                        <button type="submit" name="delete" value="delete">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php }; ?>
    </table>
