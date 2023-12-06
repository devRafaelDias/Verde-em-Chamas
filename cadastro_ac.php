<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('db_connect.php');
        try{
            $stmt = $dbh-> prepare("insert into user (nome, email, senha) values (?,?,?);");
            $stmt->bindParam (1,$_POST["nome"]);
            $stmt->bindParam (2,$_POST["email"]);
            $stmt->bindParam (3,$_POST["senha"]);
            if($stmt->execute()){
                header('Location: login.php');
                die();
            }
            
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    ?>

</body>
</html>