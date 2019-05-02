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

<?php
//Calcule le montant total du panier
function montant_panier()
{
    //initialisation du montant à O
    $montant = 0;
    // Comptage des articles
    $nb_articles = count($_SESSION['panier']['id_article']);
    // Calcul du total
    for($i = 0; $i < $nb_articles; $i++)
    {
        $montant += $_SESSION['panier']['qte'][$i] * $_SESSION['panier']['prix'][$i];
    }
    //Retourner le résultat
    return $montant;
}
?>

}
