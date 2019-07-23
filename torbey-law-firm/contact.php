if (isset($_GET['prenom']) && isset($_GET['nom']))
	{
	$prenom = $_GET['prenom'];
	$nom = $_GET['nom'];
	echo "Bonjour $prenom $nom";
	}
else
	echo “Bonjour”;	
