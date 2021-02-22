    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--GoogleFont-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
        <!--BootStrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

        <title>Vem Segura</title>
    </head>

    <body>
        <header>
            <div class="container" id="nav-container">
                <nav class="navbar navbar-expand-lg fixed-top navbar-light">
                    <a href="./index.php" class="navbar-brand">
                        <img id="logo" src="img/logo.png" alt="logo vem segura">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="toggle-navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                        <div class="navbar-nav">
                            <a href="#" class="nav-item nav-link" id="home-menu">Home</a>
                            <a href="#" class="nav-item nav-link" id="about-menu">Sobre</a>
                            <a href="#" class="nav-item nav-link" id="services-menu">Leis e Artigos</a>
                            <a href="#" class="nav-item nav-link" id="team-menu">Time</a>
                            <a href="#" class="nav-item nav-link" id="contato-menu">Contato</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Funcionalidades
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="denuncia.php">Denunciar</a>
                                    <a class="dropdown-item" href="cadastro.php">Cadastre-se</a>
                                    <a class="dropdown-item" href="consulta.php">Consulta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
