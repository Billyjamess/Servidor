<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../resources/css/home.css">
</head>
<body>

    <div class="nav-side-menu">
        <div class="brand">Tela Inicial</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home" aria-hidden="true"></i> Inicio
                    </a>
                </li>

                <li>
                    <a href="{{ route('listarlinguagem') }}">
                        <i class="fa fa-folder" aria-hidden="true"></i> Cadastro de Linguagem
                    </a>
                </li>

                <li>
                    <a href="{{ route('listarvagas') }}">
                        <i class="fa fa-folder" aria-hidden="true"></i> Cadastro de Vaga
                    </a>
                </li>

                <li>
                    <a href="{{ route('listarcandidato') }}">
                        <i class="fas fa-user-tie fa-lg"></i> Cadastro de Candidato
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div class="container">
    @yield('content1')
</div>
</body>
</html>
