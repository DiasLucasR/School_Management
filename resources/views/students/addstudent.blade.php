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

    <div class="container">
        <h2>Inserir Aluno </h2>
        @if (Session::get('Existe'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('Existe') }}
            </div>
        @endif

        <form action="/alunos/adicionar" method="post">
            @csrf
            <div class="form-group">
                <label for="nomecurso">Nome do Aluno:</label>
                <input type="text" class="form-control" id="nomealuno" placeholder="Insira seu nome" name="nomealuno">

                <label for="usualuno">CPF:</label>
                <input type="text" class="form-control " id="cpf_aluno" placeholder="Insira CPF" name="cpf_aluno">

                <label for="emailaluno">E-mail:</label>
                <input type="email" class="form-control " id="emailaluno" placeholder="email@mail.com"
                    name="emailaluno">

                <label for="passaluno">Senha:</label>
                <input type="password" class="form-control " id="passwordaluno" placeholder="Insira senha"
                    name="passwordaluno">

                <br>
                <button type="submit" class="btn btn-dark">Adicionar</button>

            </div>

        </form>

        @if (Session::get('Sucesso'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Sucesso') }}
            </div>
        @endif

        @if (Session::get('Falha'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Falha') }}
            </div>
        @endif
        @if (Session::get('Eliminado'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Falha') }}
            </div>
        @endif

    </div>
</body>

</html>
