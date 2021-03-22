<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/nav.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>
<body>
    <div class="topnav" id="myTopnav">
        <h2>Divã</h2>
        <a href="#">Home</a>
        <a href="#">Consulta</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
        <a href="login.php" target="_self">Perfil</a>
        <a href="#">Sair</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
	<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="imag/user.png" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Mudar foto
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Usuario
                                    </h5>
                                    <h6>
                                        Usuario ou Psicólogo
                                    </h6>
                                    <p class="proile-rating">Avaliações <span>375</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Informações</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Descrição</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>ESPECIALIDADES</p>
                            <a href="">Infantil</a><br/>
                            <a href="">Casal</a><br/>
                            <a href="">Mulheres</a>
                            <p>OPÇÕES</p>
                            <a href=""><i class="fa fa-phone"></i>  Marcar consulta</a><br/>
							<a href=""><i class="fa fa-whatsapp"></i>  Chat</a><br/>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nome</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Doutor</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>doutor@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telefone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Formação</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>UnicSul 2012-1016</p>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>CRP</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123-xxx-098</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experiência</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>5 anos</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Valor da consulta</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>R$60/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Horario de Atendimento</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>11:00am - 20:00pm</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Dias de Atendimento</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Seg a Sex</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Endereço</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Rua dos bobos N° 0</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Biografia</label><br/>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque molestiae cupiditate nihil, ex nostrum rerum accusantium ipsum porro numquam ullam ab odio dolore accusamus culpa, aliquam ea cum tempora. Eum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
			
</body>
</html>

<!-- <div class="social-icons">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-linkedin"></i>
					<i class="fa fa-google"></i>
					<i class="fa fa-instagram"></i>
				</div> -->