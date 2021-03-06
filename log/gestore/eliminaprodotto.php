<?php
    require_once 'C:/xampp/htdocs/Progetto-SAED/include/core.inc.php';
?>

<!DOCTYPE html>
<html lan="eu">
<head>
  <meta charset="UTF-8">
  <title>Elimina Prodotto</title>

  <link rel="stylesheet" href="/Progetto-SAED/style.css">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <header class="header clearfix">
      <div id="drop-menu" style="padding: 15px;">
  			<ul id="menu" style="list-style-type: none;   text-decoration:none; display:block;" >

          <li style=" display:inline; padding:15px;"><a href="/Progetto-SAED/log/gestore/prodotti.php">Prodotti</a></li>
          <li style=" display:inline; padding:15px;"><a href="/Progetto-SAED/log/gestore/personale.php">Personale</a></li>
          <li style=" display:inline; padding:15px;"><a href="/Progetto-SAED/log/gestore/index.php">Profilo</a></li>
          <li style=" display:inline; padding:15px;"><a href="/Progetto-SAED/index.html">Logout</a></li>
  			</ul>
  		</div>
  </header>

  <div id="eliminaprodotto" class="titoloeliminaprodotto">
    <div id="titoloeliminaprodotto"  class="titoloeliminaprodotto">
      <label>Elimina Prodotto</label>
    </div>
    <form action="#" class="formelimina__prodotto clearfix" method="post">
      <label>ID:</label>
      <input type="text" name="ID" class="testoelimina__prodotto" placeholder="ID..." /><br>
      <input type="submit" class="modificabtn" name="Submit" value="Elimina"/>
    </form>
  </div>
    <div style='text-align:center;color: red;'>
    <?php
    if(isset($_POST['Submit'])){
                require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                ini_set('soap.wsdl_cache_enabled',0);
                PhpWsdl::$CacheTime=0;
                $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                $soap= new SoapClient($wsdl);
                $risposta = $soap->eliminaProdotto($_POST["ID"]);
                print($risposta);
    }
    ?>
  </div>
</body>
</html>
