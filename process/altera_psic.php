<?php

            require_once 'conexao.php';

            $email = $_POST["email"];
            $telefone = $_POST['telefone'];
            $hora = $_POST['hora'];
            $dia = $_POST['dia'];
            $formacao = $_POST['formacao'];
            $crp = $_POST['crp'];
            $experiencia =  $_POST['experiencia'];
            $valor = $_POST['valor'];
            $endereco = $_POST['endereco'];
            $bio = $_POST['bio'];
            
            $id = $_POST["id"];

            print_r($_POST);

                    

                    // $query = "UPDATE psicologos 
                    // SET email='$email', ')
                    // WHERE id_psicologo = $id";
                    // $atualizada = mysqli_query($conexao, $query);


                    // if($atualizada == 1){
                    //         echo "
                    //     <script>
                    //         alert('Editado com sucesso !!!');
                    //         location.href='../pages/gerenc_aluno.php';
                    //     </script>
                    //     ";
                    // }else{
                    //     echo "
                    //     <script>
                    //         alert('Erro ao editar');
                    //         location.href='../pages/gerenc_aluno.php';
                    //     </script>
                    //     ";  
                    // }


?>