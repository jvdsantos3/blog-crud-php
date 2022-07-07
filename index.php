<?php
    require_once 'config.php';
    include_once 'src/Artigo.php';

    $artigo = new Artigo($mysql);
    $artigos = $artigo->exibirTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="container">
        <h1>Meu Blog</h1>
        <?php foreach ($artigos as $artigo) : ; ?> 
            <h2>
                <a href="artigo.php?id=<?= $artigo['id']; ?>">
                    <?= $artigo['titulo']; ?>
                </a>
            </h2>
            <p>
                <?= nl2br($artigo['conteudo']); ?>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>