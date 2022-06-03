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

    @include('props.navbar')

    <div class="container ">

        <h2>Inserir Curso</h2>
        @if (Session::get('Existe'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('Existe') }}
            </div>
        @endif
        <form action="/cursos/adicionar" method="post">
            @csrf
            <div class="form-group ">
                <div>
                    <label for="nomecurso">Nome do Curso:</label>
                    <input type="text" class="form-control" id="nomecurso" placeholder="Insira o nome do curso"
                        name="nomecurso">
                    <button type="submit" class="btn btn-dark">Remover </button>
                </div>
            </div>
        </form>

        @if (Session::get('Falha'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('Falha') }}
            </div>
        @endif
        
        @if (Session::get('Eliminado'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('Eliminado') }}
        </div>
    @endif


    </div>
</body>

</html>
