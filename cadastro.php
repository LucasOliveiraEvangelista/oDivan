<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se no Divã</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <main>
        <h1>Cadastrar conta</h1>
        <div class="cad">
            <a href="login.php">Já tem uma conta ainda então acesse!!!</a>
            
        </div>
        <div class="alter">
            <span>Ou</span>
        </div>
        <form action="process/cadastrar.php" method="POST" enctype="multipart/form-data">
            
            <p><input type="text" name="nome" placeholder="Nome">
            <input type="text" name="email" placeholder="E-mail"></p>
            <p><input type="password" name="senha" placeholder="Senha">
            <input type="text" name="nascimento" placeholder="Data de nascimento"></p>
            <p><input type="text" name="rg" placeholder="RG">
            <input type="text" name="cpf" placeholder="CPF"></p>
            <p><input type="text" name="cep" placeholder="CEP">
            <select name="op">
                <option value="">Escolha uma opção</option>
                <option value="paci" >Paciente</option>
                <option value="profi">Psicológo</option>
            </select></p>
            <p><input type="submit" value="Cadastrar"></p>
        </form>
    </main>
    <section class="images">
       <img src="imag/doctor.svg" alt="">
    </section>
</body>
</html>