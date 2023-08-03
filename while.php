<html>
<head>
    <title>Tabuada com a função While</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tabuada com a função While</h1>
    <a href="index.html">Voltar</a>

    <?php
    function exibir_tabuada($numero)
    {
        echo "<h2> Tabuada do $numero </h2>";
        echo 
        "<table>";
        echo 
        "<tr>
        <th>Operação</th>
        <th>Resultado</th>
        </tr>";

        $i = 1;
        while ($i <= 10) 
        {
            $resultado = $numero * $i;
            echo 
            "<tr>
            <td>$numero x $i</td>
            <td>$resultado</td>
            </tr>";
            $i++;
        }

        echo 
        "</table>";
    }

    if (isset($_POST['numero'])) 
    {
        $numero = (int)$_POST['numero'];

        if ($numero === 0) 
        {
            $j = 1;
            while ($j <= 10) 
            {
                exibir_tabuada($j);
                $j++;
            }
        } 
        else 
        {
            exibir_tabuada($numero);
        }
    }
    ?>

    <h2>Gerar Tabuada</h2>
    <form action="" method="post">
        <label for="numero">Digite um número "0" para gerar as tabuada do 1 ao 10:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Gerar a Tabuada</button>
    </form>
</body>
</html>
