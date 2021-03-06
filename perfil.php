<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/perfi.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	
</head>
<body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/perfil.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
        <nav class="nav">
                <div>
                    <a href="index.php" class="nav__logo">
                        <i class=''>D</i>
                        <span class="nav__logo-name">Divã</span>
                    </a>

                    <div class="nav__list">
                        <a href="feed.php" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Feed</span>
                        </a>
                        
                        <a href="consulta.php" class="nav__link">
                            <i class='bx bx-notification'></i>
                            <span class="nav__name">Consulta</span>
                        </a>

                        <a href="sobre.php" class="nav__link">
                            <i class='bx bx-book-reader'></i>
                            <span class="nav__name">Sobre nós</span>
                        </a>

                        <a href="contato.php" class="nav__link">
                            <i class='bx bx-mail-send' ></i>
                            <span class="nav__name">Contato</span>
                        </a>

                        <a href="perfil.php" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Perfil</span>
                        </a>
                    </div>
                </div>

                <a href="logout.php" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Sair</span>
                </a>
            </nav>
        </div>

        <div class="wrapper">
            <div class="left">
                <img src="imag/user.png" 
                alt="user" width="20vw">
                <h4>Nome do usuario</h4>
                <p>Psicologo ou paciente</p>
            </div>
            <div class="right">
                <div class="info">
                    <h3>INFORMAÇÕES</h3>
                    <div class="info_data">
                        <div class="data">
                            <h4>Email</h4>
                            <p>alex@gmail
                                .com</p>
                        </div>
                        <div class="data">
                        <h4>Telefone</h4>
                            <p>(11)99872-9161</p>
                    </div>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Formação</h4>
                            <p>UnicSul 2012-2016</p>
                        </div>
                        <div class="data">
                        <h4>CRP</h4>
                            <p>00/xxx123</p>
                    </div>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Experiência</h4>
                            <p>5 anos</p>
                        </div>
                        <div class="data">
                        <h4>Valor da consulta</h4>
                            <p>R$60/hr</p>
                    </div>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Horários da consulta</h4>
                            <p>11:00am - 20:00pm</p>
                        </div>
                        <div class="data">
                        <h4>Dias de consulta</h4>
                            <p>Seg à Sex</p>
                    </div>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Endereço</h4>
                            <p>Rua dos Bobos n°0</p>
                        </div>
                        <div class="data">
                        <h4>Biografia</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Velit eius error ducimus possimus nulla! Assumenda culpa 
                                ex magnam maiores magni placeat labore laudantium accusamus, 
                                rerum sapiente necessitatibus, nobis omnis voluptatibus?</p>
                    </div>
                    </div>
                </div>
            
                <div class="projects">
                    <h3>ESPECIALIDADES</h3>
                    <div class="projects_data">
                        <div class="data">
                            <h4>Infantil</h4>
                        </div>
                        <div class="data">
                            <h4>Casal</h4>
                        </div>
                        <div class="data">
                            <h4>Mulheres</h4>
                        </div>
                    </div>
                </div>
            
                <div class="social-media">
                    <ul>
                        <li><a href="process/editar_psic.php"><button>Editar</button></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="js/navbar.js"></script>
</body>
</html>