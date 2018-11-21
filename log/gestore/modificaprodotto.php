<?php
    require_once 'C:/xampp/htdocs/Progetto-SAED/include/core.inc.php';
?>

<!DOCTYPE html>
<html lan="eu">
<head>
  <meta charset="UTF-8">
  <title>Modifica Prodotto</title>

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

  <div style='text-align:center;color: red;'id="modprod" class="totmodprod">
    <div id="titolomodprod"  class="totmodprod">
      <label>Modifica Prodotto</label><br><br>
    </div>
    <?php

                        require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                        ini_set('soap.wsdl_cache_enabled',0);
                        PhpWsdl::$CacheTime=0;
                        $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                        $soap= new SoapClient($wsdl);
                      $risposta = $soap->estrazioneinformazioni2(/*$_POST['ID']*/);

  ?>
  <label>ID:     <?php echo $risposta[0]?></label><br>
  <input type="text" name="ID" class="testouser__modprod" placeholder="ID..."/> <br></br>
  <label>Nome:  <?php echo $risposta[1]?></label><br>
  <input type="text" name="Nome" class="testouser__modprod" placeholder="Nome..."/> <br></br>
  <label>Quantita: <?php echo $risposta[2]?></label><br>
  <input type="text" name="Quantita" class="testouser__modprod" placeholder="Quantita..."/> <br></br>
  <label>Prezzo: <?php echo $risposta[3]?></label><br>
  <input type="text" name="Prezzo" class="testouser__modprod"placeholder="Prezzo..."/> <br></br>
  </div>
    <div style='text-align:center;color: red;'>
    <?php
                if(isset($_POST['Modifica'])){
                require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                ini_set('soap.wsdl_cache_enabled',0);
                PhpWsdl::$CacheTime=0;
                $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                $soap= new SoapClient($wsdl);
                $replace = $soap->aggiornamento2($_POST['ID'],$_POST['Nome'],$_POST['Quantita'],$_POST['Prezzo']);
                header("Location: modificaprodotto.php");
            }
    ?>

    <input type="submit" class="button__modprod clearfix" name="modifica" value="Modifica"/>
  </div>
</body>
</html>
