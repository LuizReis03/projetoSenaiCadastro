<meta http-equiv="refresh" content="0.0002; ../front-end/cadastro.html">
<?php

    #DECLARAÇÃO DE VARIÁVEIS
    $nome = $_POST['nome'];
    $horario = $_POST['horario'];
    $horarioSaida = $_POST['horario_saida'];
    $cpf = $_POST['CPF'];
    $sala = $_POST['select_sala'];
    $limite = 0;
    
    #CONEXÃO COM O SQL
    $conexao = mysqli_connect('localhost','root','');
    mysqli_select_db($conexao,'projeto_senai');

    #VERIFICAR SE ALUNO ESTÁ REGISTRADO
    $verifica = "SELECT cpf from alunos where cpf = '$cpf'";
    $result = mysqli_query($conexao,$verifica);

    #INSERINDO VALORES NA TABELA DA SALA
    if (mysqli_num_rows($result) == NULL) {
        echo 'Aluno não está cadastrado no sistema';
    }else {
        $grava="INSERT INTO `$sala` (`Id_sala`,`horario`,`CPF`,`nome`, `horario_saida`) VALUES (NULL,'$horario','$cpf','$nome', '$horarioSaida');";
        $executa=mysqli_query($conexao,$grava) or die ("Não foi possível executar.");
    }
    

?>