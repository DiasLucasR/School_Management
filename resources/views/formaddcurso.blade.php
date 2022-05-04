<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

   <div>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="text-center">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cursos/adicionar_alunos">Adicionar Curso</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/alunos/adicionar_cursos">Adicionar Aluno</a>
          </li>
          <li class="nav-right">
            <a class="nav-link" href="/">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container ">

    <h2>Inserir Curso</h2>
    <form action="/cursos/adicionar" method="post" >
    @csrf
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

          <label for="areacurso">Area</label>
          <select class="form-control" name="areacurso" id="areacurso">
            <option value="#">Selecione</option>
            <option value="Exatas">Exatas</option>
            <option value="Humanas">Humanas</option>
            <option value="Sociais">Sociais</option>
            <option value="Biologicas">Biologicas</option>
            <option value="Engenharias">Engenharias</option>
            <option value="Linguas">Linguas</option>
          </select>
          <br>
          <button type="submit" class="btn btn-dark">Adicionar</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>