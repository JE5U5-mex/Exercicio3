<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelinha</title>
</head>
<body>
  
    <table border="2">
        <?php
      for($i=1;$i<=999;$i++){
        echo"
        <tr>
        <td>
                <h3>N° $i</h3>
                <h3>nome:</h3>
                <h3>Valor R$2,00</h3>
            </td>

            <td>
                <h1>Ação entre Amigos</h1>
                <h2>Prêmios:Som jbl</h2>
                <h2>Data:10/12</h2>
                <h2>Valor r$2,00</h2>
                <h2>N° $i</h2>
            </td>
        </tr>";
        $i++;

    }
    ?>
    
</body>
</html>