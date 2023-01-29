<?php

if (isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "database_name";

  // Criar conexão
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Verificar conexão
  if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO subscribers (nome, email)
  VALUES ('$nome', '$email')";

  if (mysqli_query($conn, $sql)) {
    echo "Dados salvos com sucesso.";
  } else {
    echo "Erro ao salvar os dados: " . mysqli_error($conn);
  }

  // Fechar conexão
  mysqli_close($conn);
}

?>