<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
   <?php 

    $nome = 'Ricardo';
    $cor = 'preto';
    $idade = '30';
    $passaTempo = 'jogar videogame';

    //aspas simples
    echo 'Olá '. $nome .', vi que sua cor preferida é '. $cor. ', estou vendo também que você possui '. $idade. ' e que gosta de '. $passaTempo. '';

    echo '</br>';


    //aspas duplas
    echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade e que gosta de $passaTempo";

   ?>




</body>

</html>