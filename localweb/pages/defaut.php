
<h1> Le Site Web de Neitsab</h1>
<h2>Présentation de la structure</h2>	
<pre>
	1 Préambule

	Vous devez réaliser un site comportant les rubriques suivantes :
	Accueil : présentation de la structure.
	Photos : présentation de photos.
	Audio ou vidéo : présentation de médias proposés par la structure.
	Evénements : présentation des événements proposés par la structure.
	Contacts : contacts de la structure.
	Espace pro : Espace administrateur dédié à la configuration du site.

	Le site doit être fonctionnel, harmonieux et présentable.

	2 architecture

	Un titre pour le site.
	Une menu supérieur.
	Un espace conteneur contenant les informations relatives à la rubrique.
	Les liens ne seront pas soulignés et changeront de couleur lorsqu'ils seront survolés.
	Le redimensionnement de la fenêtre du navigateur ne doit pas altérer l 'affichage du site.

	3 Technologies

	Le but étant de travailler avec plusieurs langages, 
	L'architecture et le design du site seront réalisés en HTML et CSS
	La rubrique Accueil affichera un texte de présentation issu d'un fichier texte.
	La rubrique événements sera gérée en langage PHP afin d'importer les données d'une BDD mySql.
	Le rubrique photos utilisera un viewer en Javascript développé par vous même.

	4 Rubrique espace pro

	La partie Espace pro proposera la saisie d'un login et mot de passe afin de se loger sur un espace administrateur qui permettra :
	La gestion des photos,
	La gestion du texte de la page d'accueil,
	La gestion des événements,
	La gestion des médias  audio ou vidéo.

	5 Menu du site
</pre>
Le menu du site peut être réalisé de différentes façons, j'en propose deux :
Utiliser une balise <div> encapsulant des balises </div>
<span>.

	<div>
		<span>Rubrique 1</span>
		<span>Rubrique 1</span>
		<span>Rubrique 1</span>
	</div>

	Utiliser un objet liste dont l'affichage est surchargé par la propriété CSS display, permettra un affichage horizontal.

	<h2>Recapitulatif</h2>				
	<strong>Le but étant de travailler avec plusieurs langages,  :	</strong></br>
	<button id="buttonUp">Cacher la liste</button><button id="buttonDown">Afficher la liste</button>
	<section  id="listeLangage">
		<!-- dl = définitions de la liste -->
		<dl> 
			<!-- dt = définitions de la liste -->
			<dt> L'architecture et le design du site seront réalisés en HTML et CSS</dt>
			<dt> La rubrique Accueil :</dt>
			<!-- dd ajouter la dé -->
			<dd>affichera un texte de présentation issu d'un fichier texte.</dd>
			<dt>La rubrique événements : </dt>
			<dd> sera gérée en langage PHP afin d'importer les données d'une BDD mySql.</dd>
			<dt>Le rubrique photos:</dt>			
			<dd>  utilisera un viewer en Javascript développé par vous même.</dd>
		</dl>	
		<!-- dl = définitions de la liste -->
		<dl> 
			<!-- dt = définitions de la liste -->
			<dt> Java :</dt>
			<!-- dd ajouter la dé -->
			<dd>langage de programmation informatique orienté objet </dd>
			<dt> Python :</dt>
			<dd> langage simple d'utilisation.</dd>
			<dt> ADA :</dt>			
			<dd>  langage de programmation orienté objet dont les premières versions remontent au début des années 1980.</dd>
		</dl>				
	</section>	
</br>

<!-- Affichage des logos des langages de programmation. -->
<a href="http://fr.wikipedia.org/wiki/Java_%28langage%29" >
	<img src="http://upload.wikimedia.org/wikipedia/fr/thumb/2/2e/Java_Logo.svg/131px-Java_Logo.svg.png" alt="Pas d'image Java" height="60px" width="45px">
</a>	
<a href="http://fr.wikipedia.org/wiki/Python_%28langage%29">
	<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Python_logo_and_wordmark.svg/131px-Python_logo_and_wordmark.svg.png" alt="Pas d'image Python" height="60px" width="120px">
</a>

<a href="http://fr.wikipedia.org/wiki/Ada_%28langage%29">
	<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Ada_lovelace.jpg/220px-Ada_lovelace.jpg" alt="Pas d'image Ada" height="60px" width="62px">
</a>

<!-- Affichage d'une image et de son commentaire -->
<div align="center">			
	<figure> 
		<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Ada_lovelace.jpg/220px-Ada_lovelace.jpg" alt="Pas d'image Ada" height="60px" width="62px">
	</figure>
	<figcaption>
		Image d'Ada Lovelace
	</figcaption>
</div>


