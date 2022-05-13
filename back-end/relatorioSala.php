<?php

    #DECLARAÇÃO DE VARIÁVEIS
    $saida = $_POST['primeiro_dia'];
    $entrada = $_POST['ultimo_dia'];
    
    #CONEXÃO COM O SQL
    $conexao = mysqli_connect('localhost','root','');
    mysqli_select_db($conexao,'projeto_senai');


    #INSERINDO VALORES NA TABELA DA SALA
    $exibe="SELECT * FROM sala_1 where horario = '$entrada' <= '$saida'";
    $executa=mysqli_query($conexao,$exibe);
    while($row=mysqli_fetch_array($executa)){
        $nome = $row['nome'];
        $horario = $row['horario'];
        $cpf = $row['CPF'];
        echo $nome, " / ";
        echo $horario, " / ";
        echo $cpf;
        echo '<br>';
    }
?>