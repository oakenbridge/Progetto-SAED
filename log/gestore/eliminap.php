<?php
    require_once 'C:/xampp/htdocs/Progetto-SAED/include/core.inc.php';
?>

<!DOCTYPE html>
<html lan="eu">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <link rel="stylesheet" href="/Progetto-SAED/style.css">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
  <header class="header clearfix">
    <div id="drop-menu">
			<ul id="menu">
        <li><a href="/Progetto-SAED/index.html">Logout</a></li>
        <li><a href="/Progetto-SAED/log/gestore/prodotti.php">Prodotti</a></li>
        <li><a href="/Progetto-SAED/log/gestore/personale.php">Personale</a></li>
        <li><a href="/Progetto-SAED/log/gestore/index.php">Profilo</a></li>
			</ul>
		</div>
  </header>

  <div id="elimina__p" class="titolo__eliminap">
    <div id="titolo__eliminap"  class="titolo__eliminap">
      <label>Elimina Utente</label>
    </div>
    <form action="#" class="formelimina__p clearfix" method="post">
      <label>Username:</label>
      <input type="text" name="Username" class="testoelimina__p" placeholder="Username..." /><br>
      <input type="submit" class="button__eliminap clearfix" name="Submit" value="Elimina"/>
    </form>
  </div>
    <div style='text-align:center;color: red;'>
    <?php
    if(isset($_POST['Submit'])){
        if(isset($_POST["Username"]) && strlen($_POST["Username"]) >0)
              {
                if($_POST["Username"] != $_SESSION["Username"]){
                require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                ini_set('soap.wsdl_cache_enabled',0);
                PhpWsdl::$CacheTime=0;
                $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                $soap= new SoapClient($wsdl);
                $risposta = $soap->eliminaUtente($_POST["Username"]);
                print($risposta);
              }
              else{
                print'Non ti puoi eliminare da solo, dai...';
              }
      }
      else{
        print"Compilare Tutti i Campi";
      }
    }
    ?>
  </div>
</body>
</html>
