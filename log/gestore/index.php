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
  <div id="login" class="totlogin" style="margin:15px; align-text:center;">
    <div id="titolologin" class="titolo">
      <label >Profilo</label>
    </div>
  <form action="#" class="formlogin clearfix" method="post" >
    <label>Nome:     <?php echo $risposta[0]?></label></br>
    <label>Cognome:  <?php echo $risposta[1]?></label></br>
    <label>Username: <?php echo $risposta[2]?></label></br>
    <label>Password: <?php echo $risposta[3]?></label></br>
    <label>Ruolo:    <?php echo $risposta[4]?></label></br>
    <label>Email:    <?php echo $risposta[5]?></label></br>
    <input type="submit" class="modificabtn" name="Modifica" value="Modifica"/>
  </form>
</div>
<?php

        if(isset($_POST['Modifica'])){
                    header("Location: modificap.php");
          }


    ?>

</body>
</html>
