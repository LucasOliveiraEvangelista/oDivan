<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja bem-vindo || HOME</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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

        <section>
          <div class="content">
              <div class="info">
                  <h2>Criado para ajudar pessoas,</br>o <span>Divã</span></h2>
                  <p>Tem como objetivo levar ajuda psicológica para pessoas de baixa renda a fazer acompanhamentos 
                      com profissionais da área por um preço acessível e uma proximidade 
                      maior do psicologo com o paciente com nossa plataforma.</p>
                  <a href="#" class="info-btn">Ver Mais</a>
              </div>
          </div>
          
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </section>

        <script src="js/navbar.js"></script>
    </body>
 
</html>
