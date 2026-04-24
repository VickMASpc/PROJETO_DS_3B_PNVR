<?php
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
        //VM- Razão da senha criptografada: Era uma implementação muito simples.
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $usuario;
            //VM- O material pedia mensagens como essa, por isso a remoção do dashboard.
            echo "Usuário logado com sucesso!";
            exit();
        } else {
            echo "Senha inválida.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
}
?>