<?php

    #DECLARAÇÃO DE VARIÁVEIS
    $pesquisa = $_GET['cpf'];
    
    #CONEXÃO COM O SQL
    $conexao = mysqli_connect('localhost','root','');
    mysqli_select_db($conexao,'projeto_senai');

    #SELECIONANDO VALORES NA TABELA ALUNOS
    
    $exibeSala1="SELECT * from sala_1 where cpf = '$pesquisa'";
    $executa=mysqli_query($conexao,$exibeSala1);
    while($row=mysqli_fetch_array($executa)){
        $nome = $row['nome'];
        $horario = $row['horario'];
        $cpf = $row['cpf'];
        echo "SALA 1 -";
        echo $nome, " / ";
        echo $horario, " / ";
        echo $cpf;
        echo '<br>';
    }

    #SELECIONANDO VALORES NA TABELA ALUNOS
    $exibeSala2="SELECT * from sala_2 where cpf = '$pesquisa'";
    $executa=mysqli_query($conexao,$exibeSala2);
    while($row=mysqli_fetch_array($executa)){
        $nome = $row['nome'];
        $horario = $row['horario'];
        $cpf = $row['cpf'];
        echo "SALA 2 -";
        echo $nome, " / ";
        echo $horario, " / ";
        echo $cpf;
        echo '<br>';
    }
?>