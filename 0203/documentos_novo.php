<?php
    require('twig_carregar.php');
    echo"<pre>";
    var_dump($_POST);

    var_dump($_FILES);
    echo"</pre>";
    echo $twig->render('documentos_novo.html');


    
