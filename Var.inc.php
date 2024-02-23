<?php
date_default_timezone_set("Europe/London");
if (isset($_GET['cs'])){
//error_reporting(E_ALL ^ E_NOTICE);
$var = $_GET['cs'];
switch ($var){
	case "qsn":
        $page = "qsn.inc.php";
		$NomPage ="Découvrir le Centre";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
	case "equipe":
        $page = "equipe.inc.php";
		$NomPage ="Notre Équipe";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "visite":
        $page = "visite.inc.php";
		$NomPage ="Visite guidée";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
		
	case "location":
        $page = "location.inc.php";
		$NomPage ="Salles à louer";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
	
	case "GynmaseD":
        $page = "GynmaseD.inc.php";
		$NomPage ="Découvrez le Gymnase";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
	case "MultimediaD":
        $page = "MultimediaD.inc.php";
		$NomPage ="Découvrez la salle multimédia";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
	case "BibliothequeD":
        $page = "BibliothequeD.inc.php";
		$NomPage ="Découvrez la Bibliothèque";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "ClasseD":
        $page = "ClasseD.inc.php";
		$NomPage ="Découvrez nos salles de classes";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
	case "ParkingD":
        $page = "ParkingD.inc.php";
		$NomPage ="Découvrez l'espace parking";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
		
	case "PolyvalenteD":
        $page = "PolyvalenteD.inc.php";
		$NomPage ="Découvrez la salle polyvalente";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
		

	case "contacts":
        $page = "contacts.inc.php";
		$NomPage ="Nous contacer";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "DemSalle":
        $page = "demandeSalle.inc.php";
		$NomPage ="Demande de salles";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

		
	case "actualite":
        $page = "actualite.inc.php";
		$NomPage ="Actualités du CSCTICAO";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
		

	case "Lect":
        $page = "lecture.inc.php";
		$NomPage = "Lecture ...";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "MotDG":
        $page = "MotDG.inc.php";
		$NomPage ="Mot du Directeur Général";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "ActuLiguePlus":
        $page = "index-Content-plus-ligue.inc.php";
		$NomPage ="Actu des ligues";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "ActuEditionPlus":
        $page = "index-Content-plus-Edition.inc.php";
		$NomPage ="Edition Speciale";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "Report":
        $page = "index-Lecture-Reportage.inc.php";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "Organes":
        $page = "Federation-Organes.inc.php";
		$NomPage ="Les Organes";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		

	case "Statuts":
        $page = "Federation-Statuts.inc.php";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "Reglement":
        $page = "Federation-Reglement.inc.php";
		$NomPage ="Le Reglement";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "VoirLigue":
        $page = "Federation-LigueDetail.inc.php";
		$NomPage ="La LIGUE";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		

	case "LigueClub":
        $page = "Federation-LigueClub.inc.php";
		$NomPage ="Les Clubs";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "VoirClub":
        $page = "Federation-LigueClub-Clubs.inc.php";
		$NomPage ="Detail Club";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "ArbitresInter":
        $page = "Federation-Arbitres-Inter.inc.php";
		$NomPage ="Arbitres Internationaux";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

		
	case "ArbitresNation":
        $page = "Federation-Arbitres-Nation.inc.php";
		$NomPage ="Arbitres Nationaux";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "ArbitresLigue":
        $page = "Federation-Arbitres-Ligue.inc.php";
		$NomPage ="Arbitres des ligues";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "FormateursEva":
        $page = "Formateur-Evaluateur-Ligue.inc.php";
		$NomPage ="Formateur / Evaluateur";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
		
	case "Coatch":
        $page = "Coatch-Ligue.inc.php";
		$NomPage ="Coatch - Entraineurs";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		

	case "CeintureNoire":
        $page = "Federation-CeintureNoire.inc.php";
		$NomPage ="Liste des membres Ceintures noires";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
	case "VoirMembre":
        $page = "Federation-LigueClub-Clubs-Membres.inc.php";
		$NomPage ="Liste des membres";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
		

	case "PalEquipeNat":
        $page = "Palmares-Equipe-Nationale.inc.php";
		$NomPage ="Palmarès EQUIPE NATIONALE";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		

	case "VoirMembreDetail":
        $page = "Clubs-Membres-Details.inc.php";
		$NomPage ="Detail Membres";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;		

	case "PaiementRenew":
        $page = "Paiement-Membres-Renew.inc.php";
		$NomPage ="Paiement Re-inscription";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		
	case "PaiementNew":
        $page = "Paiement-Membres-Nouveau.inc.php";
		$NomPage ="Paiement Inscription Nouveau Membre";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;		


	case "VoirMembreRechListe":
        $page = "Clubs-Membres-RechercheListe.inc.php";
		$NomPage ="Recherche des membres";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;		


	case "Contact":
        $page = "Federation-Contact.inc.php";
		$NomPage ="Contact de la federation";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "Histoire":
        $page = "Connaitre-TKD-Histoire.inc.php";
		$NomPage ="Histoire";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;



	case "Philosophie":
        $page = "Connaitre-TKD-Philosophie.inc.php";
		$NomPage ="Philosophie";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "Regles":
        $page = "Connaitre-TKD-Regles.inc.php";
		$NomPage ="Les Regles";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "RegleSpecial":
        $page = "Equipe-Nat-RegleSpecial.inc.php";
		$NomPage ="Le Reglement speciale";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "PalmaresPlus":
        $page = "Equipe-Nat-PalmaresPlus.inc.php";
		$NomPage ="Le palmares";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;



	case "PalmaresIndiPlus":
        $page = "Equipe-Nat-PalmaresIndiPlus.inc.php";
		$NomPage ="Palmares individuels";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "BilanPlus":
        $page = "Equipe-Nat-BilanPlus.inc.php";
		$NomPage ="Le Bilan Equipe Nationale";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;



	case "GalPhotos":
        $page = "Galerie-Media-Photos.inc.php";
		$NomPage ="Galerie photos";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;
		

	case "GalPhotosDetail":
        $page = "Galerie-Media-Photos-detail.inc.php";
		$NomPage ="Galerie photos detail";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	case "GalVideos":
        $page = "Galerie-Media-Videos.inc.php";
		$NomPage ="Galerie Vid�os";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

	case "GalVidForma":
        $page = "Galerie-Formation-Videos.inc.php";
		$NomPage ="Galerie Vid�os";
		$SlideIndex = '0';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;


	default ;
        $page = "index.inc.php";
		$NomPage ="Accueil";
		$SlideIndex = '1';
		$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
        break;

}

}else { 
	$page = "index.inc.php";
	$NomPage ="Accueil";
	$SlideIndex = '1';
	$titre = "CSCTICAO : Centre Sportif, Culturel et des TIC Ivoirien-Coreen Alassane OUATTARA";
	}
?>


<?php
//G�n�rer une chaine de caract�re unique et al�atoire

function random($car) {
	$string = "";
	$chaine = "abcdefghijklmnpqrstuvwxy0123456789";
	srand((double)microtime()*1000000);
	for($i=0; $i<$car; $i++) {
	$string .= $chaine[rand()%strlen($chaine)];
	}
	return $string;
}

// APPEL
// Génére une chaine de longueur 20

$chaine = random(15);
// Explode la date en different format

function datefr($date) {
    $date = (explode(' ', $date, 2));
	$dateDuJour = $date[0];
	$heureDuJour = $date[1];
	$sequenceDuJour = explode('-', $dateDuJour);
	$annee = $sequenceDuJour[0];
    $mois = $sequenceDuJour[1];
    $jour = $sequenceDuJour[2];

    return $jour."/".$mois."/".$annee ;
}

// Tronquer une caine de caract�res 

function tronquer($max_caracteres, $Chaine)
{
	//nombre de caract�res � afficher
	// Test si la longueur du texte d�passe la limite
	if (strlen($Chaine)>$max_caracteres)
	{    
		//$max_caracteres = 30;
		// S�l�ction du maximum de caract�res
		$Chaine = substr($Chaine, 0, $max_caracteres);
		// R�cup�ration de la position du dernier espace (afin d�viter de tronquer un mot)
		$position_espace = strrpos($Chaine, " ");    
		$Chaine = substr($Chaine, 0, $position_espace);    
		// Ajout des "..."
		$Chaine = $Chaine."...";
	}
	return $Chaine;
}
	

?>

