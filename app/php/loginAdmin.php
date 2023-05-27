<?php

include_once('../sql.php');

$sql = "SELECT * FROM administradores WHERE usuario = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $senha);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $_SESSION['usuario'] = $usuario;
    header('Location: ../../admin/dashboard/');

} else {

    header('Location: ../../admin/?login=error');

}

$stmt->close();
$conn->close();

?>