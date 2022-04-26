<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Curso</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="grid/simple-grid.min.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <h2>Inserir Curso</h2>
  </div>
  <div class="container">
    <div class="row">
      <form action="/">
        <div class="form-group ">
          <div class="col-6">
            <label for="nomecurso">Nome do Curso:</label>
            <input type="text" class="form-control" id="nomecurso" placeholder="Insira o nome do curso" name="nomecurso">

            <label for="tipocurso">Tipo</label>
            <select class="form-control" name="tipocurso" id="tipocurso">
              <option value="#">Selecione</option>
              <option value="Técnico">Técnico</option>
              <option value="Graduação">Graduação</option>
              <option value="Pós-Graduação">Pós-Graduação</option>
              <option value="Mestrado">Mestrado</option>
              <option value="Doutorado">Doutorado</option>
              <option value="Pós-Doutorado">Pós-Doutorado</option>
            </select>

            <label for="areadeatuação">Area</label>
            <select class="form-control" name="areadeatuação" id="areadeatuação">
              <option value="#">Selecione</option>
              <option value="Exatas">Exatas</option>
              <option value="Humanas">Humanas</option>
              <option value="Sociais">Sociais</option>
              <option value="Biologicas">Biologicas</option>
              <option value="Engenharias">Engenharias</option>
              <option value="Linguas">Linguas</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Adicionar</button>

          </div>

        </div>


      </form>
    </div>
  </div>

</body>

</html>