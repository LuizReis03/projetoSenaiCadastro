<?php

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nasc'];
    $cpf = $_POST['CPF'];

    $conexao = mysqli_connect('localhost','root','');
    mysqli_select_db($conexao,'projeto_senai');
    $grava="INSERT INTO `alunos` (`Id_aluno`,`nome`,`telefone`,`data_nascimento`, `cpf`) VALUES (NULL,'$nome','$telefone','$data_nasc','$cpf');";
    if ($grava == TRUE) {
        $executa=mysqli_query($conexao,$grava);
        echo "Aluno registrado com sucesso!";
    }else{
       echo "Não foi possível executar.";
    }

?>