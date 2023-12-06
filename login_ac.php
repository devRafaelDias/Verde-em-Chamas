<?php
$users = $_POST['email'];
$senha = $_POST['senha'];
$mysqli = new mysqli("localhost","root","ifsp","verde");
    $verifica =$mysqli->query("SELECT * FROM user WHERE email =
    '$users' AND senha = '$senha'") or die("erro ao selecionar");
    echo "SELECT * FROM user WHERE email =
    '$users' AND senha = '$senha'";

      if ($verifica->num_rows){
        header("Location:index.php");
      } else {
        echo "<script> alert('Login ou senha incorretos. Tente Novamente!');";
        echo "window.location.href = 'login.php'";
        echo "</script>";
      }
?>