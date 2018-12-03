<?php
    require_once 'C:/xampp/htdocs/Progetto-SAED/include/core.inc.php';
?>
<!DOCTYPE html>
<html lan="eu">
<head>
  <meta charset="UTF-8">
  <title>Gestione Prodotti</title>

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

    <section class="clearfix">
      <div class="cover_filter">
        <div class="cover__caption">
          <div class="cover__caption__copy">
            <h1>Gestione Prodotti</h1>
            </div>
          </div>
        </div>
      </section>
    <form action="#" class="clearfix" method="post" style="text-align:center">
      <input type="submit" class="button__login clearfix" name="AP" value="Aggiungi Nuovo Prodotto"/>
      <input type="submit" class="button__login clearfix" name="EP" value="Elimina Prodotto"/><br><br>
      <input type="text" name="ID" placeholder="Inserire ID"/>
      <input type="submit" class="button__login clearfix" name="MP" value="Modifica Prodotto"/>
    </form>
  <?php

          if(isset($_POST["AP"])){
            ob_end_clean();
            header("Location: aggiungiprodotto.php");
            die();
          }
          else if (isset($_POST["EP"])) {
            ob_end_clean();
            header("Location: eliminaprodotto.php");
            die();
          }
          else if (isset($_POST["MP"])) {
                if(isset($_POST["ID"]) && strlen($_POST["ID"]) >0){
                        //controlla id tramite il server
                        //creazione soap client
                        require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                        ini_set('soap.wsdl_cache_enabled',0);
                        PhpWsdl::$CacheTime=0;
                        $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                        $soap= new SoapClient($wsdl);
                        //richiesta di controllo credenziali al server
                        $risposta = $soap->controllaID($_POST["ID"]);
                          $_SESSION["ID"] = $risposta[0];
                          header("Location: modificaprodotto.php");
                          die();

                      }
                    }
  ?>



</body>
</html>
