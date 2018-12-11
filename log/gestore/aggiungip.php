<?php
    require_once 'C:/xampp/htdocs/Progetto-SAED/include/core.inc.php';
?>
<!DOCTYPE html>
<html lan="eu">
<head>
  <meta charset="UTF-8">
  <title>Aggiungi Gestore</title>

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

  <section class="clearfix" style="padding:15px;">
    <div class="cover_filter">
      <div class="cover__caption">
        <div class="cover__caption__copy">
          <h1 >Aggiungi Personale</h1>
          </div>
        </div>
      </div>
    </section>

    <head >
      <title>Form-AP</title>
    </head>

      <div id="aggiungi__p" class="titolo__aggiungip" style="padding-left:15px;">
        <div id="titolo__aggiungip"  class="titolo__aggiungip">
        </div>
        <form action="#" class="formaggiungi__p clearfix" method="post">
          <div style='text-align:center;color: red;'>
          <?php

                  if(isset($_POST['aggiungi'])){
                      if(isset($_POST["Nome"]) && strlen($_POST["Nome"]) >0
                       && isset($_POST["Cognome"]) && strlen($_POST["Cognome"]) >0
                       && isset($_POST["Username"]) && strlen($_POST["Username"]) >0
                       && isset($_POST["Password"]) && strlen($_POST["Password"]) >0
                       && isset($_POST["Password2"]) && strlen($_POST["Password2"]) >0
                       && isset($_POST["Email"]) && strlen($_POST["Email"]) >0) {
                         if($_POST["Password"] == $_POST["Password2"]){
                              require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                              ini_set('soap.wsdl_cache_enabled',0);
                              PhpWsdl::$CacheTime=0;
                              $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                              $soap= new SoapClient($wsdl);

                              $risposta = $soap->caricaGestore($_POST["Nome"],$_POST["Cognome"],$_POST["Username"],$_POST["Password"],$_POST["Email"]);
                              print"$risposta";
                            }
                            else{
                              print"Errore Password";
                            }
                            }
                            else{
                              print "Compilare Tutti I Campi";
                            }
                          }

              ?>
            </div>
              <br>
          <label>Nome:</label>
          <input type="text" name="Nome" class="testoaggiungi__p" placeholder="Nome..." /><br>
          <label>Cognome:</label>
          <input type="text" name="Cognome" class="testoaggiungi__p" placeholder="Cognome..." /><br>
          <label>Username:</label>
          <input type="text" name="Username" class="testoaggiungi__p" placeholder="Username..." /><br>
          <label>Password:</label>
          <input type="text" name="Password" class="testoaggiungi__p" placeholder="Password..." /><br>
          <label>Ripeti Password:</label>
          <input type="text" name="Password2" class="testoaggiungi__p" placeholder="Password..." /><br>
          <label>Email:</label>
          <input type="text" name="Email" class="testoaggiungi__p" placeholder="Email..." /><br>
          <input type="submit" class="modificabtn" name="aggiungi" value="Aggiungi"/>
        </form>
      </div>
<div>

</div>
</body>
</html>
