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
		//on ajoute l'article dedans.
		array_push($_SESSION['panier']['id_article'],$select['id']);
		array_push($_SESSION['panier']['qte'],$select['qte']);
		array_push($_SESSION['panier']['taille'],$select['taille']);
		array_push($_SESSION['panier']['prix'],$select['prix']);

		// Affichage du contenu du panier
?>
	<pre>
		<?php
			var_dump($_SESSION['panier']);
		?>
	</pre>

	}

}
