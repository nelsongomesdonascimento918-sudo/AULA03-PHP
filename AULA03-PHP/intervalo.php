<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Digite um número:</label><br>
        <input type="number" name="num" ><br>
        <input type="submit" value="Enviar"><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST["num"];
        if ($num <= 20 && $num >= 20)  {
            echo"Está fora do intervalo entre 10 e 20";
        }
        else{
            echo "Não está no intervalo entre 10 e 20";
        }      
    }
    ?>
    
    </body>
    </html>