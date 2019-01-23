<?php
    require_once 'C:/xampp/htdocs/Progetto-SAED/include/core.inc.php';
?>
<!DOCTYPE html>
<html>
<meta  charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Byeast | home page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

    <div class="grid">
        <div class="header">
            <a href="index.html"><img class="home" src=" img\byeast.png" alt="home"></a>

            <a class="menubottiglie" href="#bottiglie"> Bottiglie </a>
            <a class="menufusti" href="#fusti"> Fusti </a>
            <a class="menucontatti" href="#Info"> Chi Siamo </a>


            <!--////////////////////////////////////////////////////////////////////////////////////////////////////-->

            <button class="bottone" onclick="window.location.href='../../index.html'">Log Out</button>

            <!--/////////////////////////////////////////////////////////////////////////////////////////////////////-->
        </div>
        <div class="intro">
            <section class="cd-intro">
                <div class="cd-intro-content bouncy">
                    <h1>Benvenuti su Byeast.it</h1>
                    <p>Il paradiso della Birra</p>
                </div>
            </section>
        </div>


        <button onclick="topFunction()" id="topbtn" title="torna in cima ">top </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("topbtn").style.display = "block";
            } else {
                document.getElementById("topbtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>
        <!--///////////////////////////// etichetta \\\\\\\\\\\\\\\\\\\\\\\\-->
        <br><br>
        <div id="bottiglie" class="etichetta">
            <img class="etichetta" src=" img\bottiglie.png">
        </div>

        <!--///////////////////////////// etichetta \\\\\\\\\\\\\\\\\\\\\\\\-->
        <br>
        <div class="tripel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\tripel.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\tripel-back.jpg">
                </div>
            </div>


            <h3>Tripel<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p>
                      <button  type="submit" class="btncarrello" name="button" value="1011" onclick="window.alert('Prodotto Acquistato')">
                      <span>Aggiungi al carrello</span>
                    </button></form></p>

                      <?php

                      if(isset($_POST['button'])){
                        function dec(){
                        require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                        ini_set('soap.wsdl_cache_enabled',0);
                        PhpWsdl::$CacheTime=0;
                        $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                        $soap= new SoapClient($wsdl);

                        $id=$_POST['button'];
                        $input=$_POST['input'];
                        $risposta = $soap->decrementaProdotto($id,$input);}
                        dec();
                      }
                      ?>

        </div>


        <div class="dubbel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\dubbel.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\dubbel-back.jpg">
                </div>
            </div>
            <h3>Dubbel<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus1" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input1" name="input1" value="0"></input>
                                            <button type="button" id="plus1" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton1 = document.getElementById('minus1');
                                            const plusButton1 = document.getElementById('plus1');
                                            const inputField1 = document.getElementById('input1');

                                            minusButton1.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue1 = Number(inputField1.value) || 0;
                                            if(currentValue1>0){
                                            inputField1.value = currentValue1 - 1;}
                                            });

                                            plusButton1.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue1 = Number(inputField1.value) || 0;
                                            inputField1.value = currentValue1 + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="submit" class="btncarrello" nome="button1" value="1012" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></form></p>
                    <?php

                    if(isset($_POST['button1'])){
                      function dec1(){
                        $id1=$_POST['button1'];
                        $input1=$_POST['input1'];
                        require_once "../include/core.inc.php";
                            $link = connetti_mysql();
                            if(!$link) return false;
                            $check="SELECT Quantita FROM prodotto WHERE ID='$id';";
                            $quantita=esegui_query($link, $check);

                          if($quantita==0){
                            disconnetti_mysql($link);
                            return "Errore nell'estrazione";
                          }else{
                            $sql = "UPDATE prodotto SET Quantita=Quantita - '$input'  WHERE ID='$id';";
                            esegui_query($link, $sql);
                            disconnetti_mysql($link);
                            return "Acquisto avvenuto con successo";
                          }
                        }


                      dec1();
                    }
                    ?>
  </div>


        <div class="bitter">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bitter.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\bitter-back.jpg">
                </div>
            </div>
            <h3>Bitter<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <br><br>

        <div class="tripel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\IPA.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\ipa-back.jpg">
                </div>
            </div>
            <h3>Imperial IPA<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>


                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <div class="dubbel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\lambic.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\lambic-back.jpg">
                </div>
            </div>
            <h3>Lambic<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <div class="bitter">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\pale_ale.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\pale-back.jpg">
                </div>
            </div>
            <h3>Pale Ale<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <br><br>
        <div class="tripel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\pilsner.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\pilsner-back.jpg">
                </div>
            </div>
            <h3>Pilsner<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>
        <div class="dubbel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\stout.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\stout-back.jpg">
                </div>
            </div>
            <h3>Stout<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>
        <div class="bitter">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\weizen.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\weizen-back.jpg">
                </div>
            </div>
            <h3>Weizen<h3>
                    <p class="prezzo">3€</p>

                    <p class="quantity">33 cl</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>
        <br><br>
        <!--////////////////////////////// fusti \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <!--///////////////////////////// etichetta \\\\\\\\\\\\\\\\\\\\\\\\-->

        <div id="fusti" class="etichetta">
            <img class="etichetta" src=" img\fusti.png">
        </div>

        <!--///////////////////////////// etichetta \\\\\\\\\\\\\\\\\\\\\\\\-->
        <br><br>
        <div class="tripel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_tripel.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\tripel-back.jpg">
                </div>
            </div>
            <h3>Tripel<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <div class="dubbel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_dubbel.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\dubbel-back.jpg">
                </div>
            </div>
            <h3>Dubbel<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <div class="bitter">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_bitter.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\bitter-back.jpg">
                </div>
            </div>
            <h3>Bitter<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <br><br>

        <div class="tripel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_IPA.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\ipa-back.jpg">
                </div>
            </div>
            <h3>Imperial IPA<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <div class="dubbel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_lambic.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\lambic-back.jpg">
                </div>
            </div>
            <h3>Lambic<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <div class="bitter">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_paleAle.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\pale-back.jpg">
                </div>
            </div>
            <h3>Pale Ale<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <br><br>

        <div class="tripel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_pilsner.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\pilsner-back.jpg">
                </div>
            </div>
            <h3>Pilsner<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <div class="dubbel">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_stout.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\stout-back.jpg">
                </div>
            </div>
            <h3>Stout<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>

        <div class="bitter">
            <div class="card">
                <div class="front_card">
                    <img class="birre" src=" img\bar_weizen.jpg">
                </div>
                <div class="back_card">
                    <img class="birre" src=" img\weizen-back.jpg">
                </div>
            </div>
            <h3>Weizen<h3>
                    <p class="prezzo">87€</p>

                    <p class="quantity">15 L</p>
                    <div class="counterbtn"><form action="#" class="formlogin clearfix" method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" id="input" name="input" value="0"></input>
                                            <button type="button" id="plus" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton = document.getElementById('minus');
                                            const plusButton = document.getElementById('plus');
                                            const inputField = document.getElementById('input');

                                            minusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            if(currentValue>0){
                                            inputField.value = currentValue - 1;}
                                            });

                                            plusButton.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue = Number(inputField.value) || 0;
                                            inputField.value = currentValue + 1;
                                            });
                                            </script>
                                        </div>

                    <p><button  type="button" class="btncarrello" onclick="window.alert('Prodotto Acquistato')"><span>Aggiungi al carrello</span></button></p>
        </div>
        <br><br>

        <div class="footer">
            <img class="logo1" src=" img\logo1.png" />
        </div>
        <div id="Info" class="Info">
            <h2>Chi siamo</h2>
            <h4><strong><em>Byeast</em></strong> è un team nato dalla collaborazione di una cinquantina di appassionati che desiderano offrire agli amanti della birra la migliore esperienza possibile nel mondo della birra.<br>
                Numero uno nella produzione di birra artigianale a Perugia (IT), Byeast propone un assortimento di prodotti frutto di uno sviluppo e di una ricerca durata anni.
                Ovviamente, non passiamo le giornate con una pinta di birra in mano.<br><br>Noterai che mentre percorri la nostra pagina alla ricerca delle più belle perle del settore,
                il nostro web team cercherà di offrirti la migliore esperienza di navigazione sul nostro sito, il servizio clienti sarà sempre pronto a soddisfare le tue esigenze e a
                rispondere alle tue domande e gli addetti alla logistica prepareranno le consegne con la massima cura.<br>
                Ma soprattutto ci sei tu, perché senza di te tutto questo non sarebbe possibile.</h4>
            <h4>Un grazie da tutta la famiglia di Byeast.</h4>
            <h2>Contattaci</h2>
            <h4>robinporta@byeast.it<br>
                andreabragetta@byeast.it</h4>
            <h5>+31 075 6660096</h5>
            <Copyright>(c) 2018 Byeast All Rights Reserved</Copyright>
            <br><br><br>
        </div>
        <div class="footer1">
            <img class="logo1" src=" img\logo1.png" />
        </div>

    </div>

    </div>
</body>

</html>
