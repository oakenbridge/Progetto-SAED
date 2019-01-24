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
                    <div class="counterbtn"><form method="post" >
                                            <button type="button" id="minus" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input" name="input" value="0"></input>
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
                      <button type="submit" id="button" class="btncarrello" name="button" value="1011" method="post">
                      <span>Aggiungi al carrello</span>
                    </button></form></p>

                      <?php

                      if(isset($_POST["button"])){
                        if($_POST["button"]==1011){
                        require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                        ini_set('soap.wsdl_cache_enabled',0);
                        PhpWsdl::$CacheTime=0;
                        $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                        $soap= new SoapClient($wsdl);
                        $risposta = $soap->decrementaProdotto($_POST['button'],$_POST['input']);
                        echo '<script type="text/javascript">alert("' . $risposta . '")</script>';
                      }
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
                                            <input type="number" style="border-radius:25px" id="input1" name="input1" value="0"></input>
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

                    <p><button  type="submit" class="btncarrello" nome="button1" value="1012">
                      <span>Aggiungi al carrello</span></button></form></p>
                    <?php
                    if(isset($_POST['button1'])){
                      if($_POST['button1']==1012){
                      require_once('C:/xampp/htdocs/Progetto-SAED/lib/class.phpwsdl.php');
                      ini_set('soap.wsdl_cache_enabled',0);
                      PhpWsdl::$CacheTime=0;
                      $wsdl="C:/xampp/htdocs/Progetto-SAED/lib/cache/server.wsdl";
                      $soap= new SoapClient($wsdl);
                      $risposta = $soap->decrementaProdotto($_POST['button1'],$_POST['input1']);
                      echo '<script type="text/javascript">alert("' . $risposta . '")</script>';
                    }
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
                                            <button type="button" id="minus2" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input2" name="input2" value="0"></input>
                                            <button type="button" id="plus2" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton2 = document.getElementById('minus2');
                                            const plusButton2 = document.getElementById('plus2');
                                            const inputField2 = document.getElementById('input2');

                                            minusButton2.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue2 = Number(inputField2.value) || 0;
                                            if(currentValue2>0){
                                            inputField2.value = currentValue2 - 1;}
                                            });

                                            plusButton2.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue2 = Number(inputField2.value) || 0;
                                            inputField2.value = currentValue2 + 1;
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
                                            <button type="button" id="minus3" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input3" name="input3" value="0"></input>
                                            <button type="button" id="plus3" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton3 = document.getElementById('minus3');
                                            const plusButton3 = document.getElementById('plus3');
                                            const inputField3 = document.getElementById('input3');

                                            minusButton3.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue3 = Number(inputField3.value) || 0;
                                            if(currentValue3>0){
                                            inputField3.value = currentValue3 - 1;}
                                            });

                                            plusButton3.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue3 = Number(inputField3.value) || 0;
                                            inputField3.value = currentValue3 + 1;
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
                                            <button type="button" id="minus4" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input4" name="input4" value="0"></input>
                                            <button type="button" id="plus4" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton4 = document.getElementById('minus4');
                                            const plusButton4 = document.getElementById('plus4');
                                            const inputField4 = document.getElementById('input4');

                                            minusButton4.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue4 = Number(inputField4.value) || 0;
                                            if(currentValue4>0){
                                            inputField4.value = currentValue4 - 1;}
                                            });

                                            plusButton4.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue4 = Number(inputField4.value) || 0;
                                            inputField4.value = currentValue4 + 1;
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
                                            <button type="button" id="minus5" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input5" name="input5" value="0"></input>
                                            <button type="button" id="plus5" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton5 = document.getElementById('minus5');
                                            const plusButton5 = document.getElementById('plus5');
                                            const inputField5 = document.getElementById('input5');

                                            minusButton5.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue5 = Number(inputField5.value) || 0;
                                            if(currentValue5>0){
                                            inputField5.value = currentValue5 - 1;}
                                            });

                                            plusButton5.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue5 = Number(inputField5.value) || 0;
                                            inputField5.value = currentValue5 + 1;
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
                                            <button type="button" id="minus6" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input6" name="input6" value="0"></input>
                                            <button type="button" id="plus6" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton6 = document.getElementById('minus6');
                                            const plusButton6 = document.getElementById('plus6');
                                            const inputField6 = document.getElementById('input6');

                                            minusButton6.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue6 = Number(inputField6.value) || 0;
                                            if(currentValue6>0){
                                            inputField6.value = currentValue6 - 1;}
                                            });

                                            plusButton6.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue6 = Number(inputField6.value) || 0;
                                            inputField6.value = currentValue6 + 1;
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
                                            <button type="button" id="minus7" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input7" name="input7" value="0"></input>
                                            <button type="button" id="plus7" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton7 = document.getElementById('minus7');
                                            const plusButton7 = document.getElementById('plus7');
                                            const inputField7 = document.getElementById('input7');

                                            minusButton7.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue7 = Number(inputField7.value) || 0;
                                            if(currentValue7>0){
                                            inputField7.value = currentValue7 - 1;}
                                            });

                                            plusButton7.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue7 = Number(inputField7.value) || 0;
                                            inputField7.value = currentValue7 + 1;
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
                                            <button type="button" id="minus8" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input8" name="input8" value="0"></input>
                                            <button type="button" id="plus8" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton8 = document.getElementById('minus8');
                                            const plusButton8 = document.getElementById('plus8');
                                            const inputField8 = document.getElementById('input8');

                                            minusButton8.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue8 = Number(inputField8.value) || 0;
                                            if(currentValue8>0){
                                            inputField8.value = currentValue8 - 1;}
                                            });

                                            plusButton8.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue8 = Number(inputField8.value) || 0;
                                            inputField8.value = currentValue8 + 1;
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
                                            <button type="button" id="minus9" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input9" name="input9" value="0"></input>
                                            <button type="button" id="plus9" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton9 = document.getElementById('minus9');
                                            const plusButton9 = document.getElementById('plus9');
                                            const inputField9 = document.getElementById('input9');

                                            minusButton9.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue9 = Number(inputField9.value) || 0;
                                            if(currentValue9>0){
                                            inputField9.value = currentValue9 - 1;}
                                            });

                                            plusButton9.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue9 = Number(inputField9.value) || 0;
                                            inputField9.value = currentValue9 + 1;
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
                                            <button type="button" id="minus10" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input10" name="input10" value="0"></input>
                                            <button type="button" id="plus10" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton10 = document.getElementById('minus10');
                                            const plusButton10 = document.getElementById('plus10');
                                            const inputField10 = document.getElementById('input10');

                                            minusButton10.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue10 = Number(inputField10.value) || 0;
                                            if(currentValue10>0){
                                            inputField10.value = currentValue10 - 1;}
                                            });

                                            plusButton10.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue10 = Number(inputField10.value) || 0;
                                            inputField10.value = currentValue10 + 1;
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
                                            <button type="button" id="minus11" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input11" name="input11" value="0"></input>
                                            <button type="button" id="plus11" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton11 = document.getElementById('minus11');
                                            const plusButton11 = document.getElementById('plus11');
                                            const inputField11 = document.getElementById('input11');

                                            minusButton11.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue11 = Number(inputField11.value) || 0;
                                            if(currentValue11>0){
                                            inputField11.value = currentValue11 - 1;}
                                            });

                                            plusButton11.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue11 = Number(inputField11.value) || 0;
                                            inputField11.value = currentValue11 + 1;
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
                                            <button type="button" id="minus12" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input12" name="input12" value="0"></input>
                                            <button type="button" id="plus12" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton12 = document.getElementById('minus12');
                                            const plusButton12 = document.getElementById('plus12');
                                            const inputField12 = document.getElementById('input12');

                                            minusButton12.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue12 = Number(inputField12.value) || 0;
                                            if(currentValue12>0){
                                            inputField12.value = currentValue12 - 1;}
                                            });

                                            plusButton12.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue12 = Number(inputField12.value) || 0;
                                            inputField12.value = currentValue12 + 1;
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
                                            <button type="button" id="minus13" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input13" name="input13" value="0"></input>
                                            <button type="button" id="plus13" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton13 = document.getElementById('minus13');
                                            const plusButton13 = document.getElementById('plus13');
                                            const inputField13 = document.getElementById('input13');

                                            minusButton13.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue13 = Number(inputField13.value) || 0;
                                            if(currentValue13>0){
                                            inputField13.value = currentValue13 - 1;}
                                            });

                                            plusButton13.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue13 = Number(inputField13.value) || 0;
                                            inputField13.value = currentValue13 + 1;
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
                                            <button type="button" id="minus14" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input14" name="input14" value="0"></input>
                                            <button type="button" id="plus14" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton14 = document.getElementById('minus14');
                                            const plusButton14 = document.getElementById('plus14');
                                            const inputField14 = document.getElementById('input14');

                                            minusButton14.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue14 = Number(inputField14.value) || 0;
                                            if(currentValue14>0){
                                            inputField14.value = currentValue14 - 1;}
                                            });

                                            plusButton14.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue14 = Number(inputField14.value) || 0;
                                            inputField14.value = currentValue14 + 1;
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
                                            <button type="button" id="minus15" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input15" name="input15" value="0"></input>
                                            <button type="button" id="plus15" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton15 = document.getElementById('minus15');
                                            const plusButton15 = document.getElementById('plus15');
                                            const inputField15 = document.getElementById('input15');

                                            minusButton15.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue15 = Number(inputField15.value) || 0;
                                            if(currentValue15>0){
                                            inputField15.value = currentValue15 - 1;}
                                            });

                                            plusButton15.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue15 = Number(inputField15.value) || 0;
                                            inputField15.value = currentValue15 + 1;
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
                                            <button type="button" id="minus16" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input16" name="input16" value="0"></input>
                                            <button type="button" id="plus16" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton16 = document.getElementById('minus16');
                                            const plusButton16 = document.getElementById('plus16');
                                            const inputField16 = document.getElementById('input16');

                                            minusButton16.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue16 = Number(inputField16.value) || 0;
                                            if(currentValue16>0){
                                            inputField16.value = currentValue16 - 1;}
                                            });

                                            plusButton16.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue16 = Number(inputField16.value) || 0;
                                            inputField16.value = currentValue16 + 1;
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
                                            <button type="button" id="minus17" style="border-radius:25px; background-color:#ffad33;">
                                                -
                                            </button>
                                            <input type="number" style="border-radius:25px" id="input17" name="input17" value="0"></input>
                                            <button type="button" id="plus17" style="border-radius:25px; background-color:#ffad33;">
                                                +
                                            </button>
                                            <script>
                                            const minusButton17 = document.getElementById('minus17');
                                            const plusButton17 = document.getElementById('plus17');
                                            const inputField17 = document.getElementById('input17');

                                            minusButton17.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue17 = Number(inputField17.value) || 0;
                                            if(currentValue17>0){
                                            inputField17.value = currentValue17 - 1;}
                                            });

                                            plusButton17.addEventListener('click', event => {
                                            event.preventDefault();
                                            const currentValue17 = Number(inputField17.value) || 0;
                                            inputField17.value = currentValue17 + 1;
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
