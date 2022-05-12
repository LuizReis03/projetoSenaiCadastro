<?php

    #DECLARAÇÃO DE VARIÁVEIS
    $nome = $_POST['nome'];
    $horario = $_POST['horario'];
    $cpf = $_POST['CPF'];
    $limite = 0;
    
    #CONEXÃO COM O SQL
    $conexao = mysqli_connect('localhost','root','');
    mysqli_select_db($conexao,'projeto_senai');

    #INSERINDO VALORES NA TABELA DA SALA
    $grava="INSERT INTO `sala_1` (`Id_sala`,`horario`,`CPF`,`nome`) VALUES (NULL,'$horario','$cpf','$nome');";
    $executa=mysqli_query($conexao,$grava) or die ("Não foi possível executar.");

?>