<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aprenda HTML5</title>
</head>
<body>
    <header>
        <h1>Aprenda HTML5</h1>
        <h4>Formulários</h4>
    </header>
    <hr />
    <!--Uma div para usar os dados do formulário-->
    <div>
		<p><strong>Nome: </strong>
			<!--Código PHP para leitura dos dados do formulário-->
			<?php
				echo "O senhor " . $_GET["nome"] . " trabalha como " . $_GET["profissao"];	
			?>
		</p>
    </div>
</body>
</html>