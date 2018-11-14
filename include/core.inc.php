<?php
	// Facciamo partire la sessione
	session_start();
	ob_start();

	/* e.g. login.php  */
	function curPageFile(){
		$file_name = basename($_SERVER["SCRIPT_FILENAME"]);
		return $file_name;
	}

	/* url completo di variabili get */
	function curPageURL() {
		$pageURL = 'http';
		if (@$_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}

	/* imposta la pagina precedente */
	function setPagePrevUrlSession(){
		if(curPageFile() != 'login.php' && curPageFile() != 'logout.php' ) $_SESSION['pagina_precedente']=curPageURL();
	}

	function nome_file(){
		$filename = basename($_SERVER['PHP_SELF']);
		if(isset($filename) && !empty($filename)) return $filename;
		else return 'index.php';
	}
	$page_name=nome_file();

	// Connessione al database
	function connetti_mysql(){
		$link = mysqli_connect('localhost','root','','byeast') or die ("Errore connessione");
		return $link;

	}

	// Esecuzione query
	function esegui_query($link, $query) {
		if (($result = mysqli_query($link, $query))) return $result;
		else return 0;
	}

	// Disconnessione database
	function disconnetti_mysql($link,$res = NULL){
		if(isset($res) && !empty($res)) mysqli_free_result ( $res );
		mysqli_close ( $link );
	}

	// Controllo se l'utente è loggato, quindi se le variabili di sessione sono impostate
	function is_logged(){
	    if(!isset($_SESSION['username'])){
	        return false;
	    } else {
	    	return true;
	    }
	}


?>
