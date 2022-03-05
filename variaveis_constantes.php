<html>

<head>
    <meta charset="UTF-8">
    <title>variaveis_constantes</title>
</head>

<body>
   <?php 

    //Para variaveis constantes, é necessário usar a function define(). Para isso, o primeiro item deve ser o nome da variavel e o segundo item o seu valor. Não esquecer de colocar tudo entre '' e de separar o primeiro valor do segundo por virgula. 
    
    //Como boa prática, sempre colocar variaveis constantes em caixa alta.

    define('BD_URL','endereco_bd_dev');
    define('BD_USUARIO','usuario_dev');
    define('BD_SENHA','senha_dev');

    //Para declaração de variaveis CONSTANTES não é preciso usar o $.

    echo BD_URL . '</br>';
    echo BD_USUARIO . '</br>';
    echo BD_SENHA . '</br>';



   ?>




</body>

</html>