<?PHP

if isset(($_POST['nom']) && ($_POST['prenom']) && ($_POST['login']) && ($_POST['login']) && ($_POST['email']) && ($_POST['mdp'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
}

$pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
    'login' => $login,
    'mdp' => $mdp_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['login'] = $login;
    echo 'Vous êtes connecté !';
}

session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');
