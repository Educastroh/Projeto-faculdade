<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
</head>
<body>
    <?php 
        if($_SERVER['REQUEST_METHOD']== "POST"){
            $nome_materno = $_POST['test1'];
            $datanascimento = $_POST['test2'];
            $cep = $_POST['test3'];
        }
    ?>
    <center>
    <div1>
        <h2>Autenticação de dois fatores</h2>
    </div1>
    <div2>
        <form action="#" method="get">
         <label for="test1">Qual o nome da sua mãe ?</label><br>
         <input type="text" name="test1" id="test1" maxlength="60" minlength="24"><br><br>

         <label for="test2">Insira sua data de nascimento:</label>
         <input type="date" name="test2" id="test2"><br><br>

         <label for="test3">Informe seu CEP:</label>
         <input type="number" name="test3" id="test3">
        </form>
    </div2>
    </center>
</body>
</html>