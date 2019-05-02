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

<?php
// Supprimer un article du panier

 //    $ref_article ou $id_article Retourne TRUE si la suppression a bien été effectuée FALSE sinon, "absent" si l'article était déjà retiré du panier

function supprim_article($ref_article)
{
    $suppression = false;
    /* On vérifie que l'article à supprimer est bien présent dans le panier */
    if(nombre_article($ref_article) != false)
    {
        // création d'un tableau temporaire de stockage des articles */
        $panier_tmp = array("id_article"=>array(),"qte"=>array(),"taille"=>array(),"prix"=>array());
        // Comptage des articles du panier */
        $nb_articles = count($_SESSION['panier']['id_article']);
        // Transfert du panier dans le panier temporaire
        for($i = 0; $i < $nb_articles; $i++)
        {
            // On transfère tout sauf l'article à supprimer
            if($_SESSION['panier']['id_article'][$i] != $ref_article)
            {
                array_push($panier_tmp['id_article'],$_SESSION['panier']['id_article'][$i]);
                array_push($panier_tmp['qte'],$_SESSION['panier']['qte'][$i]);
                array_push($panier_tmp['taille'],$_SESSION['panier']['taille'][$i]);
                array_push($panier_tmp['prix'],$_SESSION['panier']['prix'][$i]);
            }
        }
        // Le transfert est terminé, on ré-initialise le panier
        $_SESSION['panier'] = $panier_tmp;
        // Option : on peut maintenant supprimer notre panier temporaire:
        unset($panier_tmp);
        $suppression = true;
    }
    else
    {
        //si rien à supprimer
        $suppression = "absent";
    }
    return $suppression;
}
?>
}
