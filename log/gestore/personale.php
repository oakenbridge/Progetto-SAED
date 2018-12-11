
<!DOCTYPE html>
<html lan="eu">
<head>
  <meta charset="UTF-8">
  <title>Gestione Personale</title>

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
          <h1>Gestione Personale</h1>
          </div>
        </div>
      </div>
    </section>
  <form action="#" class="clearfix" method="post" style="text-align:center">
    <input type="submit" class="modificabtn" name="AP" value="Aggiungi Personale"/>
    <input type="submit" class="modificabtn" name="EP" value="Elimina Personale"/>
  </form>
<?php

        if(isset($_POST["AP"])){
          ob_end_clean();
          header("Location: aggiungip.php");
          die();
        }
        else if (isset($_POST["EP"])) {
          ob_end_clean();
          header("Location: eliminap.php");
          die();
        }
?>


</body>
</html>
