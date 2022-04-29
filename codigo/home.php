<?php
#include("conexao.php");
#include("funcoes.php");
#var_dump("certos")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="uft-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Formulário Cadastro</title>

</head>

<body>
    
    <h1 class="titulo-aba-cursos">Áreas de TI</h1>
    <div class="tela-login container">
        <ul class="nav nav-tabs" id="aba-cursos">
            <a href="#" id="botao_front" class="botao-esquerda" onmouseover="mudar_background('#1E90FF')" onmouseout="mudar_background('#272727')">Front-End</a>
            <a href="amostra_curso.html" id="botao_back" class="botao-direita" onmouseover="mudar_background('#6600CC')" onmouseout="mudar_background('#272727')">Back-End</a>
            <a href="amostra_curso.html" id="botao_full" class="botao-esquerda" onmouseover="mudar_background('#CC0000')" onmouseout="mudar_background('#272727')">Full-Stack</a>
            <a href="amostra_curso.html" id="botao_devops" class="botao-direita" onmouseover="mudar_background('#0000CC')" onmouseout="mudar_background('#272727')">DevOps</a>
            <a href="amostra_curso.html" id="botao_seg"class="botao-esquerda" onmouseover="mudar_background('#606060')" onmouseout="mudar_background('#272727')">Segurança</a>
            <a href="amostra_curso.html" id="botao_redes" class="botao-direita" onmouseover="mudar_background('#009999')" onmouseout="mudar_background('#272727')">Redes</a>
            <a href="amostra_quiz.html" id="botao_quiz" class="botao-final" onmouseover="mudar_background('#fb9e25')" onmouseout="mudar_background('#272727')">Faça o Teste de Aptidão</a>
        </ul>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

<script>
        function mudar_background(bg) {

        var aba_cursos = document.getElementById('aba-cursos')
        aba_cursos.style.background = bg      

        }

        var botao_front = document.getElementById('botao_front');
        var botao_back = document.getElementById('botao_back');
        var botao_full = document.getElementById('botao_full');
        var botao_devops = document.getElementById('botao_devops');
        var botao_seg = document.getElementById('botao_seg');
        var botao_redes = document.getElementById('botao_redes');
        var botao_quiz = document.getElementById('botao_quiz');

        botao_front.addEventListener('click', function (e) {
             alert('Você será redirecionado para á página com informações sobre a área de front-end');
        });
        botao_back.addEventListener('click', function (e) {
             alert('Você será redirecionado para á página com informações sobre a área de back-end');
        });
        botao_full.addEventListener('click', function (e) {
             alert('Você será redirecionado para á página com informações sobre a área de full-stack');
        });
        botao_devops.addEventListener('click', function (e) {
             alert('Você será redirecionado para á página com informações sobre a área de DevOps');
        });
        botao_seg.addEventListener('click', function (e) {
             alert('Você será redirecionado para á página com informações sobre a área de segurança');
        });
        botao_redes.addEventListener('click', function (e) {
             alert('Você será redirecionado para á página com informações sobre a área de redes de computadores');
        });
        botao_quiz.addEventListener('click', function (e) {
             alert('Você será redirecionado para o quiz de aptidão');
        });


    </script>

</html>