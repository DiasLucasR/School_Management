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

    <div>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div>
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
                              <a class="dropdown-item text-light" href="/courses/add">Adicionar</a>
                              <a class="dropdown-item text-light" href="/courses/remove">Remover</a>
                              <a class="dropdown-item text-light" href="/courses/edit">Modificar</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                              Alunos
                            </button>
                            <div class="dropdown-menu bg-dark">
                              <a class="dropdown-item text-light" href="/students/add">Adicionar</a>
                              <a class="dropdown-item text-light" href="/students/remove">Remover</a>
                              <a class="dropdown-item text-light" href="/students/edit">Modificar</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                              Professores
                            </button>
                            <div class="dropdown-menu bg-dark">
                              <a class="dropdown-item text-light" href="/teachers/add">Adicionar</a>
                              <a class="dropdown-item text-light" href="/teachers/remove">Remover</a>
                              <a class="dropdown-item text-light" href="/teachers/edit">Modificar</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-right ">
                        <a class="nav-link text-light" href="/">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>