<?php
    ini_set('display_errors', 1);
    session_start();
    if (!isset($_SESSION["clientid"]));
    else{
        include '../classuser.php';
        include '../classfitxer.php';
        $fitxer1 = new Fitxer("../FITXERS/users.txt");
        $linea=$fitxer1->fitxerlectura();
        $user=null;
        $user=$fitxer1->visualitzardadespersonals($linea,$_SESSION["clientname"]);
    }
?>
<html>
<head>
     <meta content="text/html" charset="UTF-8" http-equiv="content-type"/>
<link href="../CSS/projecte.css" rel="stylesheet" type="text/css"/>
<title>projecte</title>
</head>
<body>
<div class="contingut_centrat">
     <?php
        ini_set('display_errors', 1);
        if (!isset($_SESSION["clientid"])) echo "NO HI HA CAP SESSIO CREADA".'<a class="a_button" href="http://localhost/daw2_m07uf1_projecte_grup09/index.html">INICIAR SESSIO</a>';
        else if($user!=null){
            echo "<p>".$user->toString()."</p>".'<a class="a_button" href="../clientprincipal.html">tornar</a>';
        }else echo "<p>error en la sessio</p>".'<a class="a_button" href="../clientprincipal.html">tornar</a>';
     ?>
</div>
</body>
</html>