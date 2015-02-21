<h1> Le Site Web de Neitsab</h1>
<h2>Utilisateur</h2>	
<p>
	Voici la liste des utilisateurs dans la base de données: 
</p>
<table>
	<!-- Bgcolor="red"-->								
	<caption> Tableau récapitulatif des informations </caption>
	<!-- centrage des textes -->
	<thead align="center">
		<!-- tr = ligne du tableau  -->
		<tr>
			<!-- th = colonnes de titres du tableau  -->
			<th>ID</th>
			<th>Nom</th>
			<th>Prénom</th>		
			<th>Supprimer Utilisateur</th>							
		</tr>			

<script> // côté client
// Fonction permettant d'empecher l'ajout d'entrée dans la table

function gestionSubmit() {
	if (document.getElementsByTagName("nom") == "" &&  document.getElementsByTagName("prenom") == "")
	{
		return false;						
	}					
	else
	{
		return true;
	};
}			

</script>
<?php // côté serveur
// initialisation de la connexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno($con)){
	echo 'Erreur de connexion:'.mysqli_connect_error();
}

//Récupération d'information nécéssaire à l'ajout d'utilisateur;
if ($_SERVER["REQUEST_METHOD"] == "POST") {				
	if ( isset($_POST['nom']) && isset($_POST['prenom'])){		
		ajouterUtilisateur($con,$_POST['nom'],$_POST['prenom']);				
	}															
}				
// de base les informations son en GET ( écris dans l'adresse internet)
if (isset($_GET['action'])){	
	echo 'if action ';
	if ($_GET['action']=="supprimer") {
//echo 'supprimer delete ';
		supprimerUtilisateur ($con,$_GET['id']);
	}						
}		

function supprimerUtilisateur ($con,$id){
	$table="utilisateurs";	
	$requete = "DELETE FROM ".$table." WHERE id=(".$id.");";
//echo $requete;
	if (mysqli_query($con, $requete)) {
//echo "Delete row successfully";		
	}
	else 
	{
		echo "Error updating record: " . mysqli_error($con);						
//echo $requete;
	}		
}

function ajouterUtilisateur($con,$nom,$prenom){
	$table="utilisateurs";
	$champNom = "nom";
	$champPrenom= "prenom";
	$requete = "INSERT INTO ".$table." (".$champNom.",".$champPrenom.") VALUES ('".$nom."','".$prenom."');";
//echo $requete;

	if (mysqli_query($con, $requete)) {
//echo "Insert successfully";	
	} 
	else 
	{
//echo "Error updating record: " . mysqli_error($con);						
//echo $requete;
	}	
}


function afficheAll($con){					// variable pour la requête
	$affiche="SELECT * FROM utilisateurs;";		
// requête					
	$resultat = mysqli_query($con,$affiche);		

	while ($row = mysqli_fetch_array($resultat))
	{
//echo $row['nom'].' '. $row['prenom'].'<br/>';	
		echo "<tr> ";								
		echo"<td>".$row['id']."</td>";
		echo"<td>".$row['nom']."</td>";
		echo"<td>".$row['prenom']."</td>";
		echo "<td> <a href='?page=utilisateur&action=supprimer&id=".$row['id']."' > Supprimer </a> </td>";							
		echo "</tr>";						
	}
}

afficheAll($con);

// déconnexion
mysqli_close($con);
?>
<tr>
	<td colspan="4">Message dans tout le tableau.</td>	
</tr>
</thead>
</table>			
<h3> Menu d'ajout ou suppression d'utilisateur dans la base de donnée </h3>
<div id="formulaire">
	<form action="?page=utilisateur" method="post" onsubmit="gestionSubmit()">
		<strong>Nom:</strong> </br>
		<input type="text" name="nom" value=""/></br>
		<strong>Prénom:</strong></br>					
		<input type="text" name="prenom" value=""/></br>
		<button type="submit" name="btEnvoyer">Ajouter un utilisateur</button></br>
	</form>			
</div>

