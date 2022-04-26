<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Aluno</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="grid/simple-grid.min.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <h2>Inserir Aluno </h2>
  </div>
  <div class="container">
    <div class="row">
      <form action="login/">
        <div class="form-group col-6">
          <div>
            <label for="nomecurso">Nome do Aluno:</label>
            <input type="text" class="form-control" id="nomealuno" placeholder="Insira seu nome" name="nomealuno">
            
            <label for="usualuno">Usuário:</label>
            <input type="text" class="form-control col-6" id="usuarioaluno" placeholder="Insira usuario de acesso" name="usualuno">

            <label for="emailaluno">E-mail:</label>
            <input type="email" class="form-control col-6" id="emailaluno" placeholder="email@mail.com" name="emailaluno">
            
            <label for="passaluno">Senha:</label>
            <input type="password" class="form-control col-6" id="passwordaluno" placeholder="Insira senha" name="passwordaluno">
                        
            <br>
            <button type="submit" class="btn btn-primary">Adicionar</button>

          </div>
        </div>
      </form>
    </div>
  </div>

</body>

</html>