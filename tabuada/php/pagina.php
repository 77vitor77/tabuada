<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="./../css/reset.css">
    <link rel="stylesheet" href="./../css/style.css">
</head>

<body>

    <div class="conteiner">

        <h1>Tabuada</h1>

    </div>

    <div class="form">

        <form action="./pagina.php" method="post">

            <label for="detalhes-de-tabuada" class="palavras">Coloque o numero selecionado</label>

            <div class="estrutura">

                <input type="text" name="numero" id="numero-da-tabuada" class="btn">

                <input type="submit" value="enviar" class="btn">

            </div>

        </form>


            <?php

            $numero = $_POST["numero"];

            function tabela($numero)
            {

                $resultado = 0;

                echo "<table>";
                for ($i = 0; $i <= 10; $i++) {
                    echo "<tr>" . $numero . "*" . $i . "=" . $resultado = $numero * $i . "</tr> <br>";
                }
                echo "</table>";
            }

            tabela($numero);

            ?>

        

    </div>

</body>

</html>