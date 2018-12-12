<?php
    require_once 'include/core.inc.php';
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Byeast | login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href=" img\logo.png" />
</head>
<body>

            <!--////////////////////////////////////////////////////////////////////////////////////////////////////-->

            <!--/////////////////////////////////////////////////////////////////////////////////////////////////////-->
        </div>

        <div id="login" class="titolologin" style="margin-top:15px; padding-left:15px;">
              <div id="titolologin"  class="titolologin">
                <label>Login</label>
              </div>
              <form action="#" class="formlogin clearfix" method="post">
                <div style='text-align:center;color: red;'>
                <?php
                        if(isset($_POST['Submit'])){
                            if(isset($_POST["Username"]) && strlen($_POST["Username"]) >0
                               && isset($_POST["Password"]) && strlen($_POST["Password"]) >0){
                                    //controlla login tramite il server
                                    //creazione soap client
                                    require_once('lib/class.phpwsdl.php');
                                    ini_set('soap.wsdl_cache_enabled',0);
                                    PhpWsdl::$CacheTime=0;
                                    $wsdl="lib/cache/server.wsdl";
                                    $soap= new SoapClient($wsdl);
                                    //richiesta di controllo credenziali al server
                                    $risposta = $soap->controllaLogin($_POST["Username"],$_POST["Password"]);

                                    if($risposta[0]=='Gestore'){
                                      ob_end_clean( );
                                      $_SESSION["Username"] = $risposta[1];
                                      header("Location:log/gestore/index.php");//Pagina che si apre se utente tipo gestore
                                      die();
                                    }
                                    else if ($risposta[0]=='Utente'){
                                      $_SESSION["Username"] = $risposta[1];
                                      header("Location:log/utente/index.php");//Pagina che si apre se utente tipo utente
                                      ob_end_clean( );
                                      die();
                                      }
                                    else{
                                      print"Username o Password Errata";
                                    }

                                    }
                            else{print"Inserire tutte le credenziali";
                            }
                          }


                    ?>
                  </div>
                  </br>
                <label >Username:</label>
                <input type="text" name="Username" class="testouser__login" placeholder="Username..." /><br>
                <label>Password:</label>
                <input type="password" name="Password" class="testouser__register" placeholder="Password..." /><br>
                <input type="submit" class="modificabtn" name="Submit" value="Accedi"/>
              </form>
            </div>

        </body>
        </html>
