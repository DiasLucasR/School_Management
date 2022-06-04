<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                              Cursos
                            </button>
                            <div class="dropdown-menu bg-dark">
                              <a class="dropdown-item text-light" href="/courses/add_courses">Adicionar</a>
                              <a class="dropdown-item text-light" href="/courses/remove_courses">Remover</a>
                              <a class="dropdown-item text-light" href="/">Modificar</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                              Alunos
                            </button>
                            <div class="dropdown-menu bg-dark">
                              <a class="dropdown-item text-light" href="/students/add_students">Adicionar</a>
                              <a class="dropdown-item text-light" href="/students/remove_students">Remover</a>
                              <a class="dropdown-item text-light" href="/">Modificar</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                              Professores
                            </button>
                            <div class="dropdown-menu bg-dark">
                              <a class="dropdown-item text-light" href="/teachers/add_teachers">Adicionar</a>
                              <a class="dropdown-item text-light" href="/teachers/remove_teachers">Remover</a>
                              <a class="dropdown-item text-light" href="/">Modificar</a>
                            </div>
                          </div>
                    </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                    <a class="nav-link  text-light" href="/">Sair</a>
                  </ul>
                       
                  
                
        </nav>
