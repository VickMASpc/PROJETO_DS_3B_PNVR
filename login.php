<?php
//logica de login
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario']; 
    $senha = $_POST['senha'];

    if (!$conn) {
        die("Database connection variable is missing.");
    }

    $stmt = $conn->prepare("SELECT id, senha FROM usuarios WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if ($senha === $row['senha']) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $usuario;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>