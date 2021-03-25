

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/perfi.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	
</head>
<body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="../imag/logo.png" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
        <nav class="nav">
                <div>
                    <a href="index.php" class="nav__logo">
                    <img src="../imag/logo.png" width="30px" alt="">
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

        <?php

    require_once 'conexao.php';
    


            
    
    $query = "SELECT * FROM psicologos WHERE id_psicologo = ";
    $listar = mysqli_query($conexao, $query);
    while($dados = mysqli_fetch_array($listar)){
        
        echo '<tr>

        <form action="altera_psic.php" method="POST">
        <div class="wrapper">
            <div class="left">
                <img src="../imag/user.png" 
                alt="user" width="20vw">
                <h4>$dados[nome]</h4>
                <p>Psicologo ou paciente</p>
            </div>
            <div class="right">
                <div class="info">
                    <h3>INFORMAÇÕES</h3>
                    <div class="info_data">
                        <div class="data">
                            <h4>Email</h4>
                            <input type="text" name="email">
                        </div>
                        <div class="data">
                        <h4>Telefone</h4>
                        <input type="text" name="telefone">
                    </div>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Formação</h4>
                            <input type="text" name="formacao">
                        </div>
                        <div class="data">
                        <h4>CRP</h4>
                        <input type="text" name="crp">
                    </div>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Experiência</h4>
                            <input type="text" name="experiencia">
                        </div>
                        <div class="data">
                        <h4>Valor da consulta</h4>
                        <input type="text" name="valor">
                    </div>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Horários da consulta</h4>
                            <input type="text" name="hora">
                        </div>
                        <div class="data">
                        <h4>Dias de consulta</h4>
                        <input type="text" name="dia">
                    </div>
                    </div>
                    <div class="info_data">
                        <div class="data">
                            <h4>Endereço</h4>
                            <input type="text" name="endereco">
                        </div>
                        <div class="data">
                        <h4>Biografia</h4>
                            <textarea name="bio"></textarea>
                    </div>
                    </div>
                </div>
        </form>';
    }
        ?>
            
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
                        <li><a href="process/editar_psic.php"><button>Feito</button></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="../js/navbar.js"></script>
</body>
</html>

