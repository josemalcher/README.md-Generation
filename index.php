<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>READNE.md Generator</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <form action="lib/md_gerador.php" method="post">
  <div class="form-group">
    <label>Nome do Curso/Apostila/Livro</label>
    <input type="text" name="nome_curso" class="form-control">
  </div>

  <div class="form-group">
    <label>Link de Origem</label>
    <input type="text" class="form-control" name="link_origem">
  </div>
  
  <div class="form-group">
    <label>Breve Descrição do conteúdo</label>
    <textarea  class="form-control" name="descricao_curso" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label>Tópicos principais do Curso/Apostila/Livro</label>
    <textarea  class="form-control" name="topicos" rows="20"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">CRIAR README.md</button>
</form>
</div>
</body>
<script src="js/bootstrap.min.js"></script>
</html>