<?php
$nome_curso = filter_input(INPUT_POST, 'nome_curso');
$link_origem = filter_input(INPUT_POST, 'link_origem');
$descricao_curso = filter_input(INPUT_POST, 'descricao_curso');
$topicos = filter_input(INPUT_POST, 'topicos');

if (is_null($descricao_curso)) {
    $descricao_curso = $json['descricao_curso'] ?? null;
}
$topicos_br = nl2br($topicos, false);
$topicos_arr = explode('<br>', $topicos_br);

echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>README.md</title>
</head>
<body>
<?php echo htmlentities('# '.$nome_curso.''); ?>
<br>
<br>
<?php echo htmlentities($link_origem ); ?>
<br>
<br>
<?php echo htmlentities($descricao_curso); ?>

<br>
<br>

<p><?php echo htmlentities('## <a name="indice">Índice</a>'); ?></p>
<?php
foreach ($topicos_arr as $key => $value) {
    echo ($key + 1) .". [" . trim($value) . "](#parte" . ($key + 1) . ")&nbsp &nbsp &nbsp";
    echo "<br>";
}
?>
<p>---</p>

<?php
foreach ($topicos_arr as $key => $value) {
    echo "<br>";
    echo htmlentities('## <a name="parte' . ($key + 1) . '">' . ($key + 1) .' - ' . $value . '</a>');
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "[Voltar ao Índice](#indice)";
    echo "<br>";
    echo "<br>";
    echo "---";
    echo "<br>";
    echo "<br>";
}
?>
<br>
</body>
</html>
