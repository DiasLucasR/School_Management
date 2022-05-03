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
  @if(Session::get('sucess'))
  <div class="alert sucess-alert">
    {{Session::get('sucesso')}}

  </div>
  @endif
  <div class="container">
    <h2>Inserir Aluno </h2>
    <form action="/alunos/adicionar" method="post" >
    @csrf
    <div class="form-group">
        <label for="nomecurso">Nome do Aluno:</label>
        <input type="text" class="form-control" id="nomealuno" placeholder="Insira seu nome" name="nomealuno">

        <label for="usualuno">CPF:</label>
        <input type="text" class="form-control " id="cpf_aluno" placeholder="Insira CPF" name="cpf_aluno">

        <label for="emailaluno">E-mail:</label>
        <input type="email" class="form-control " id="emailaluno" placeholder="email@mail.com" name="emailaluno">

        <label for="passaluno">Senha:</label>
        <input type="password" class="form-control " id="passwordaluno" placeholder="Insira senha" name="passwordaluno">

        <br>
        <button type="submit" class="btn btn-dark">Adicionar</button>

      </div>

    </form>


    @if(Session::get('Sucesso'))
  <div class="alert alert-success" role="alert">
    {{Session::get('Sucesso')}}
  </div>
  @endif

  @if(Session::get('Falha'))
  <div class="alert alert-success" role="alert">
    {{Session::get('Falha')}}
  </div>
  @endif
  </div>
  

</body>

</html>