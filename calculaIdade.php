<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Idade</title>
    <!-- inserir arquivo javascript depois desta linha-->
    <script>
        function limparResultado() {
        const resultado = document.querySelector('.resultado');
        const botaoLimpar = document.querySelector('input[type="reset"]');

            if (resultado && botaoLimpar) {
                resultado.remove();
                botaoLimpar.remove();

            }
        }
    </script>
    
    
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 420px;
            background: #fff;
            margin: 60px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .radio-group {
            margin-bottom: 18px;
            padding: 10px;
            background: #eef6ff;
            border-radius: 8px;
        }

        .radio-group label {
            font-weight: normal;
            margin-right: 15px;
            cursor: pointer;
        }

        input[type="submit"],
        input[type="reset"] {
            width: 100%;
            padding: 12px;
            background: #0077cc;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background: #005fa3;
        }

        input[type="reset"] {
            background: #f10303 !important;
        }

        .resultado {
            margin-top: 25px;
            padding: 20px;
            background: #e9f5ff;
            border-left: 6px solid #0077cc;
            border-radius: 8px;
            font-size: 16px;
            color: #333;
        }

        .resultado strong {
            color: #005fa3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Calculadora BG de Idade</h2>

    <form method="post" action="calculaIdade.php">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Ano de nascimento:</label>
        <input type="number" name="ano_nasc" required>

        <label>Ano atual:</label>
        <input type="number" name="ano_atual" required>

        <div class="radio-group">
            <label>Já fez aniversário este ano?</label><br><br>

            <label>
                <input type="radio" name="aniversario" value="sim" checked>
                Sim
            </label>

            <label>
                <input type="radio" name="aniversario" value="nao">
                Não
            </label>
        </div>

        <input type="submit" value="Calcular Idade">
        <input type='reset' value='Limpar' onclick='limparResultado()' style='margin-top:10px; background:#999;'>
    </form>    


        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "<div class = 'resultado'><br>"; 
                $nam = $_POST["nome"];
                $atual = $_POST["ano_atual"];
                $nasc = $_POST["ano_nasc"];
                $aniv = $_POST["aniversario"];

                if($aniv == "sim"){
                    $idade = $atual - $nasc;
                    echo "<p>Seu nome é:$nam</p>";
                    echo "<p>Sua idade é:$idade</p>";
                }else{
                    $idade = ($atual - $nasc)-1;
                    echo "<p>Seu nome é:$nam</p>";
                    echo "<p>Sua idade é:$idade</p>";
                }
            }
        ?>
</div>
</body>
</html>