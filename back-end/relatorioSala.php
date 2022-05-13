<?php

    #DECLARAÇÃO DE VARIÁVEIS
    $saida = $_POST['primeiro_dia'];
    $entrada = $_POST['ultimo_dia'];
    $sala = $_POST  ['select_sala'];
    
    #CONEXÃO COM O SQL
    $conexao = mysqli_connect('localhost','root','');
    mysqli_select_db($conexao,'projeto_senai');


    #SELECIONANDO VALORES NA TABELA DA SALA
    $exibe="SELECT * FROM $sala where horario = '$entrada' <= '$saida'";
    $executa=mysqli_query($conexao,$exibe);
    while($row=mysqli_fetch_array($executa)){
        $nome = $row['nome'];
        $horario = $row['horario'];
        $cpf = $row['cpf'];
        echo $nome, " / ";
        echo $horario, " / ";
        echo $cpf;
        echo '<br>';
    }
?>