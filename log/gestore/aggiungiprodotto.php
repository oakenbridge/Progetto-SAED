<?php
    require_once 'C:/xampp/htdocs/Progetto-SAED/include/core.inc.php';
?>
<!DOCTYPE html>
<html lan="eu">
<head>
  <meta charset="UTF-8">
  <title>Aggiungi Prodotto</title>

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

    <head >
      <title>Form-AP</title>
    </head>

      <div id="aggiungiprodotto" class="titoloaggiungiprodotto">
        <div id="titoloaggiungiprodotto"  class="titoloaggiungiprodotto">
          <label>Aggiungi Prodotto</label>
        </div>
        <form action="#" class="formaggiungi__prodotto clearfix" method="post">
          <div style='text-align:center;color: red;'>
            <?php

                    if(isset($_POST['aggiungi'])){

                                require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                                ini_set('soap.wsdl_cache_enabled',0);
                                PhpWsdl::$CacheTime=0;
                                $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                                $soap= new SoapClient($wsdl);

                                $risposta = $soap->caricaProdotto($_POST["ID"],$_POST["Nome"],$_POST["Quantita"],$_POST["Prezzo"]);
                                print"$risposta";

                          }

                ?>
            </div>
              <br>
          <label>Id:</label>
          <input type="text" name="ID" class="testoaggiungi__prodotto" placeholder="ID..." /><br>
          <label>Nome:</label>
          <input type="text" name="Nome" class="testoaggiungi__prodotto" placeholder="Nome..." /><br>
          <label>Quantità:</label>
          <input type="text" name="Quantita" class="testoaggiungi__prodotto" placeholder="Quantità..." /><br>
          <label>Prezzo:</label>
          <input type="text" name="Prezzo" class="testoaggiungi__prodotto" placeholder="Prezzo..." /><br>
          <input type="submit" class="button__aggiungiprodotto clearfix" name="aggiungi" value="Aggiungi"/>
        </form>
      </div>
<div>

</div>
</body>
</html>
