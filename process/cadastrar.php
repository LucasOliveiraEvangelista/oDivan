<?php

        require_once 'conexao.php';
        $nome = $_POST['nome'];
        $email =$_POST['email'];
        $senha = $_POST['senha'];
        $nasc = $_POST['nascimento'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $cep = $_POST['cep'];
        $_POST['op'];

        if( $nome == ""){
            echo "<script>
            alert('Ops! Campo nome vazio');
            history.back();
        </script>";
        }else if($email == ""){
            echo "<script>
            alert('Ops! Campo E-mail vazio');
            history.back();
        </script>";
        }else if($senha == ""){
            echo "<script>
            alert('Ops! Campo senha vazio');
            history.back();
        </script>";
        }else if($nasc == ""){
            echo "<script>
            alert('Ops! Data de nascimento vazia');
            history.back();
        </script>";
        }else if($cep == ""){
            echo "<script>
            alert('Ops! CEP vazio');
            history.back();
        </script>";
        }else if($rg == ""){
            echo "<script>
            alert('Ops! Campo RG vazio');
            history.back();
        </script>";
        }else if($cpf == ""){
            echo "<script>
            alert('Ops! Campo CPF vazio');
            history.back();
        </script>";
        }else if($_POST['op'] == ""){
            echo "<script>
            alert('Ops! op');
            history.back();
        </script>";
        }else{
            if($_POST['op'] == "paci"){
                $query= "INSERT INTO pacientes (nome, email, senha, nascimento, rg, cpf, cep) 
                VALUES ('$nome', '$email', '$senha', '$nasc', '$rg', '$cpf', '$cep')";

                $inserir = mysqli_query($conexao, $query);

                if($inserir == 1 ){
                    echo "<script>
                    alert('Cadastrado com sucesso! Seja');
                    location.href='../index.php';
                    </script>";
                }else{
                    echo "<script>
                    alert('Faio aqui!');
                    location.href='cadastrar.php';
                    </script>";
                }

                }else if($_POST['op'] == "profi"){
                    $query= "INSERT INTO psicologos (nome, email, senha, nascimento, rg, cpf, cep) 
                    VALUES ('$nome', '$email', '$senha', '$nasc', '$rg', '$cpf', '$cep')";

                    $inserir = mysqli_query($conexao, $query);
                    if($inserir == 1 ){
                        echo "<script>
                        alert('Cadastrado com sucesso!');
                        location.href='../index.php';
                        </script>";
                    
                
                        }else{
                            echo "<script>
                            alert('Faio aqui!');
                            location.href='cadastrar.php';
                            </script>";
                        }

                }
            
            }
        

?>