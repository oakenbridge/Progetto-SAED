<?php
/**
 *  @param string $loggeduser
 * @service Byeast
 */
class Byeast{
   //tutti i parametri delle funzioni e il return type vanno propriamente commentati per garantire una corretta esecuzione
   //del file WSDL
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    /**
     * controllaLogin
     *
     * @param string $utente
     * @param string $password
     * @return Array Response string
     */
    public function controllaLogin($utente, $password){
        require_once "../include/core.inc.php";

        $link = connetti_mysql();
        if(!$link) return false;

        $sqlgest = "SELECT Username, Password, Ruolo FROM utente WHERE Username = '$utente' AND Password = '$password' AND Ruolo LIKE 'Gestore'";
        $sqluten = "SELECT Username, Password, Ruolo FROM utente WHERE Username = '$utente' AND Password = '$password' AND Ruolo LIKE 'Utente'";
        $resg=esegui_query($link, $sqlgest);
        $resu=esegui_query($link, $sqluten);


        if ( mysqli_num_rows($resg)>0) {
            $row=mysqli_fetch_assoc($resg);
            $stato = array('Gestore', $row['Username']);
            }
        else if (mysqli_num_rows($resu)>0){
            $row=mysqli_fetch_assoc($resg);
            $stato = array('Utente', $row['Username']);
            }
        else{
              $stato = array('Errore');
        }
        disconnetti_mysql($link);
        return $stato;
    }
    /**
    * @param string $ID
    * @return Array Response string
    */
   public function controllaID($ID){
       require_once "../include/core.inc.php";

       $link = connetti_mysql();
       if(!$link) return false;

       $sql= "SELECT ID, Nome, Prezzo, Quantita FROM prodotto WHERE ID = '$ID'";
       $res=esegui_query($link, $sql);

       if ( mysqli_num_rows($res)>0) {
           $row=mysqli_fetch_assoc($res);
           $stato = array($row['ID']);
           }
       else{
             $stato = array('Errore');
       }
       disconnetti_mysql($link);
       return $stato;
   }
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	 /**
     * estrazioneinformazioni
     *
     * @param string $utente
     * @return Array Response string
     */
	public function estrazioneInformazioni($utente){
		require_once "../include/core.inc.php";

        $link = connetti_mysql();
        if(!$link) return false;
		$sql = "SELECT Nome,Cognome,Username,Password,Ruolo,Email FROM utente WHERE Username='$utente'";
		$res=esegui_query($link, $sql);
		$row=mysqli_fetch_assoc($res);
		if ( mysqli_num_rows($res)>0) {
            $stato = array($row["Nome"],$row["Cognome"],$row["Username"],$row["Password"],$row["Ruolo"],$row["Email"],'OK');
        } else {
            $stato = array('','','','','','','',"impossibile caricare dati");
        }
        disconnetti_mysql($link);
        return $stato;
	}
  /**
  * estrazioneinformazioni2
  *
  * @param string $ID
  * @return Array Response string
  */
public function estrazioneinformazioni2($ID){
 require_once "../include/core.inc.php";

     $link = connetti_mysql();
     if(!$link) return false;
 $sql = "SELECT ID,Nome,Quantita,Prezzo FROM prodotto WHERE ID='$ID'";

$res=esegui_query($link,$sql);
$row=mysqli_fetch_assoc($res);
 $stato = array($row["ID"],$row["Nome"],$row["Quantita"],$row["Prezzo"]);
 if ( mysqli_num_rows($res)>0) {
         disconnetti_mysql($link);
         return $stato;
     } else {
       disconnetti_mysql($link);
       return "0000";
     }
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/**
   * prodotto
   *
   * @param string $ID
   * @return string Response string
   */
public function eliminaProdotto($ID){
    require_once "../include/core.inc.php";

        $link = connetti_mysql();
        if(!$link) return false;

        $check = "SELECT Nome, ID, Quantita, Prezzo from prodotto where ID = '$ID'";
        $sql = "DELETE FROM prodotto where ID = '$ID'";
    $res = esegui_query($link, $sql);

    if($res==0){
      disconnetti_mysql($link);
      return "Errore nell'eliminazione";
    }else{
      esegui_query($link, $sql);
      disconnetti_mysql($link);
      return "Eliminazione avvenuta con successo";
    }
  }

  //-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    /**
     * caricafile
     *
     * @param string $nome
     * @param string $cognome
     * @param string $username
     * @param string $password
     * @param string $email
     * @return string
     */
	public function caricaGestore($nome,$cognome,$username,$password,$email){
		require_once "../include/core.inc.php";

        $link = connetti_mysql();
        if(!$link) return false;

        $sql1="SELECT Username FROM utente WHERE Username = '$username'";
        $res1=esegui_query($link, $sql1);

        if(mysqli_num_rows($res1)==0){

        $sql = "INSERT INTO utente (Nome,Cognome,Username,Password,Ruolo,Email) VALUES ('$nome','$cognome','$username','$password','Gestore','$email');";
		$res=esegui_query($link, $sql);
		if($res==0){
			disconnetti_mysql($link);
			return "Errore nell'inserimento";
		}else{
			disconnetti_mysql($link);
			return "Inserimento avvenuto con successo";
		}
  }
  else{
    return "Username non disponibile";
  }
}//useless noob//
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/**
 * caricafile
 *
 * @param int $id
 * @param string $nome
 * @param int $quantita
 * @param int $prezzo
 * @return string
 */
public function caricaProdotto($id,$nome,$quantita,$prezzo){
   require_once "../include/core.inc.php";

       $link = connetti_mysql();
       if(!$link) return false;
       $check = "SELECT * FROM prodotto;";
     $sql = "INSERT INTO prodotto (ID,Nome,Quantita,Prezzo) VALUES ('$id','$nome','$quantita','$prezzo');";
   $res=esegui_query($link, $check);

   if($res==0){
     disconnetti_mysql($link);
     return "Errore nell'inserimento";
   }else{
     esegui_query($link,$sql);
     disconnetti_mysql($link);
     return "Inserimento avvenuto con successo";
   }
 }
 /**
  * decrementa prodotto
  *
  * @param int $id
  * @param int $quantita
  * @return string
  */
 public function decrementaProdotto($id, $quantita){
    require_once "../include/core.inc.php";

        $link = connetti_mysql();
        if(!$link) return false;
      $sql = "UPDATE prodotto SET Quantita='$quantita' - 1  WHERE ID='$id';";
      $res=esegui_query($link, $sql);
      disconnetti_mysql($link);
      return "Prodotto acquistato con successo";
  }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------
/**
   * dipendenti
   *
   * @param string $utente
   * @return string Response string
   */

public function eliminaUtente($utente){
    require_once "../include/core.inc.php";

        $link = connetti_mysql();
        if(!$link) return false;

        $check = "SELECT Nome,Cognome,Username,Password,Ruolo,Email FROM utente WHERE Username = '$utente';";
        $sql = "DELETE FROM utente WHERE Username = '$utente'";
    $res = esegui_query($link, $check);

    if($res==0){
      disconnetti_mysql($link);
      return "Errore nell'eliminazione";
    }else{
      esegui_query($link, $sql);
      disconnetti_mysql($link);
      return "Eliminazione avvenuta con successo";
    }
  }


//useless noob------------------------------------------------------------------------------------------------------------------------------
	 /**
     * aggiornamento
     *
     * @param string $usr
     * @param string $nome
     * @param string $cognome
     * @param string $username
     * @param string $password
     * @param string $ruolo
     * @param string $email
     * @return string Response string
     */
	public function aggiornamento($usr,$nome,$cognome,$username,$password,$ruolo,$email){
		require_once "../include/core.inc.php";

        $link = connetti_mysql();
        if(!$link) return false;
        if($usr!=NULL && $nome!=NULL && $cognome!=NULL && $username!=NULL && $password!=NULL && $ruolo!=NULL && $email!=NULL){
            //ENTRA NELL'IF
            $sql = "UPDATE utente SET Nome='$nome', Cognome='$cognome', Password='$password', Ruolo='$ruolo', Email='$email' WHERE Username = '$usr';";

            $res = esegui_query($link, $sql);
            $row=mysqli_fetch_assoc($res);

            $stato = $row['Utente'];

            disconnetti_mysql($link);
            return $stato;
          }
          else{
            $stato = 'INVALID INPUT';
            return $stato;
          }
	}
  /**
    * aggiornamento 2
    *
    * @param string $ID
    * @param string $Nome
    * @param string $Quantita
    * @param string $Prezzo
    * @return string Response string
    */
 public function aggiornamento2($ID,$Nome,$Quantita,$Prezzo){
   require_once "../include/core.inc.php";

       $link = connetti_mysql();
       if(!$link) return false;
       if($ID!=NULL && $Nome!=NULL && $Quantita!=NULL && $Prezzo!=NULL){
           //ENTRA NELL'IF(SEEEEEEE)
           $sql = "UPDATE prodotto SET ID='$ID', Nome='$Nome', Quantita='$Quantita', Prezzo='$Prezzo' WHERE ID='$ID'";
           $res = esegui_query($link, $sql);
           $row=mysqli_fetch_assoc($res);

           $stato = $row['prodotto'];

           disconnetti_mysql($link);
           return $stato;
         }
         else{
           $stato = 'INVALID INPUT';
           return $stato;
         }
 }

}//useless noob//

//Tool per la creazione del wsdl a partire dalla classe attuale
include_once 'class.phpwsdl.php';
$soap = PhpWsdl::CreateInstance(
                null, // Set this to your namespace or let PhpWsdl find one
                null, // Set this to your SOAP endpoint or let PhpWsdl determine it
                null, // Set this to a writeable folder to enable caching
                null, // Set this to the filename or an array of filenames of your
                null, // webservice handler class(es) (be sure to add the file that
                // contains the handler class as first class definition at
                // first)
                null, // Set this to the webservice handler class name or let
                // PhpWsdl determine it
                null, // If you want to define some methods from code, give an array
                // of PhpWsdlMethod here
                null, // If you want to define some types from code, give an array of
                // PhpWsdlComplex here
                false, // Set this to TRUE to output WSDL on request and exit after
                // WSDL has been sent
                false   // Set this to TRUE to run the SOAP server and exit
);
PhpWsdl::$CacheTime=0;
ini_set("soap.wsdl_cache_enabled", "0");
    //PhpWsdl::RunQuickMode ( );
    $wsdl = $soap->CreateWsdl();
    $wsdl = $soap->GetCacheFileName();
    rename($wsdl, "cache/server.wsdl");
    $server = new SoapServer("cache/server.wsdl", array('cache_wsdl' => WSDL_CACHE_NONE));
    $server->setClass("Byeast");
    $server->handle();
?>
