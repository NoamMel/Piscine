<?php
//On regarde si le panier existe, sinon on doit le créer
class panier{
	public function construc(){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']=array();
			$_SESSION['panier']['nomProduit']=array();
			$_SESSION['panier']['qtteProduit']=array();
			$_SESSION['panier']['Prix']=array();
		}

	}

}
?>
