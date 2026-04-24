# Necessário para o projeto rodar:

- MySQL e XAMPP instalados
- my.ini (XAMPP -> MySQL -> Config) configurado na porta 3307
- XAMPP com MySQL na porta 3307 (Config -> Service and Port Settings -> MySQL -> Config -> Main Port = 3307)

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

INSERT INTO usuarios (usuario, senha) VALUES ('admin', '$2y$10$7VgPTfakoRyRq5sKeIs7kOw4ofu3g71NVm70xtJ6LieW6XejEcAzi');
```

## Testes

- http://localhost/phpmyadmin/ (para verificar o banco de dados)
- http://localhost/projeto-login/index.html (para testar o login)

## Usuário teste:

- Usuário: admin
- Senha: admin123

<!--VM- Razão da remoção-->
* dashboard.php é fora de escopo para o projeto (como dito no PDF da professora).