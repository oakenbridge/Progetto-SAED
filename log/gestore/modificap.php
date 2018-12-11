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
      <div id="drop-menu" style="padding: 15px;">
  			<ul id="menu" style="list-style-type: none;   text-decoration:none; display:block;" >

          <li style=" display:inline; padding:15px;"><a href="/Progetto-SAED/log/gestore/prodotti.php">Prodotti</a></li>
          <li style=" display:inline; padding:15px;"><a href="/Progetto-SAED/log/gestore/personale.php">Personale</a></li>
          <li style=" display:inline; padding:15px;"><a href="/Progetto-SAED/log/gestore/index.php">Profilo</a></li>
          <li style=" display:inline; padding:15px;"><a href="/Progetto-SAED/index.html">Logout</a></li>
  			</ul>
  		</div>
  </header>
  <section class="clearfix">
    <div class="cover_filter">
      <div class="cover__caption">
        <div class="cover__caption__copy">
          <h1>Home - Gestore</h1>
          </div>
        </div>
      </div>
    </section>


    <?php

                        require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                        ini_set('soap.wsdl_cache_enabled',0);
                        PhpWsdl::$CacheTime=0;
                        $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                        $soap= new SoapClient($wsdl);
                        $risposta = $soap->estrazioneInformazioni("".$_SESSION["Username"]."");


  ?>

  <div id="login" class="totlogin">
    <div id="titolologin"  class="totlogin">
      <label>Profilo</label>
    </div>
  <form action="#" class="formlogin clearfix" method="post">
    <?php

            if(isset($_POST['Modifica'])){
                if(isset($_POST["Nome"]) && strlen($_POST["Nome"]) >0
                 && isset($_POST["Cognome"]) && strlen($_POST["Cognome"]) >0
                 && isset($_POST["Password"]) && strlen($_POST["Password"]) >0
                 && isset($_POST["Password2"]) && strlen($_POST["Password2"]) >0
                 && isset($_POST["Email"]) && strlen($_POST["Email"]) >0) {

                   if($_POST["Password"] == $_POST["Password2"]){
                        require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                        ini_set('soap.wsdl_cache_enabled',0);
                        PhpWsdl::$CacheTime=0;
                        $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                        $soap= new SoapClient($wsdl);

                          $replace = $soap->aggiornamento($risposta[2],$_POST['Nome'],$_POST['Cognome'],$risposta[2],$_POST['Password'],$_POST['Ruolo'],$_POST['Email']);
                          header("Location: index.php");
                      }
                      else{
                        echo ('<div style="text-align:center;color: red;"> Errore Password </div></br>');
                      }
                      }
                      else{
                        echo ('<div style="text-align:center;color: red;"> Compilare Tutti i Campi </div></br>');
                      }
                    }

        ?>
    <label>Nome:    </label> </br>
    <input type="text" name="Nome" class="testouser__login" value = <?php echo $risposta[0]  ?> /> </br>
    <label>Cognome:  </label></br>
    <input type="text" name="Cognome" class="testouser__login" value=<?php echo $risposta[1]  ?> /></br>
    <label>Password: </label></br>
    <input type="text" name="Password" class="testouser__login" value=<?php echo $risposta[3]  ?> /></br>
    <label>Ripeti Password: </label></br>
    <input type="text" name="Password2" class="testouser__login" value=<?php echo $risposta[3]  ?> /></br>
    <label>Ruolo:    </label></br>
    <input type="text" name="Ruolo" class="testouser__login" value=<?php echo $risposta[4]  ?> /></br>
    <label>Email:    </label></br>
    <input type="text" name="Email" class="testouser__login" value=<?php echo $risposta[5]  ?> /></br>

    <input type="submit" class="button__login clearfix" name="Modifica" value="Modifica"/>
  </form>

</div>
</body>
</html>
