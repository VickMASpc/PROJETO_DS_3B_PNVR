# Necessário para o projeto rodar:

MySQL e XAMPP instalados
my.ini (XAMPP -> MySQL -> Config) configurado na porta 3307
XAMPP com MySQL na porta 3307 (Config -> Service and Port Settings -> MySQL -> Config -> Main Port = 3307)

* Adicione os arquivos em uma pasta neste diretório: C:\xampp\htdocs

## Script Banco de Dados (execute no phpmyadmin)
```sql
CREATE DATABASE login;
USE login;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (usuario, senha) VALUES ('admin', 'admin123');
```

## Testes

http://localhost/phpmyadmin/ (para verificar o banco de dados)
http://localhost/projeto-login/index.html (para testar o login)

*dashboard.php não implementado

## Usuário teste:

Usuário: admin
Senha: admin123