<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);?>

<?php
    session_start();

    define('TL_ROOT', dirname(__DIR__));
    define('LOGIN', 'UEL311');
    define('PASSWORD', getenv('PASSWORD')); // Pas sécurisé, utiliser variable d'environnement
    define('DB_ARTICLES', TL_ROOT.'/db/articles.json');

    function connectUser($login = null, $password = null) {
        try {
            if (!is_null($login) && !is_null($password)) {
                if ($login === LOGIN && $password === PASSWORD) {
                    return array(
                        'login'    => LOGIN,
                        'password' => PASSWORD
                    );
                }
            }
        } catch (Exception $e) {
            error_log("Erreur lors de la connexion de l'utilisateur : " . $e->getMessage());
        }
        return null;
    }

    function setDisconnectUser(){
         unset($_SESSION['User']);
         session_destroy();
    }

    function isConnected(){
        if(array_key_exists('User', $_SESSION) 
                && !is_null($_SESSION['User'])
                    && !empty($_SESSION['User'])){
            return true;
        }
        return false;
    }

    function getPageTemplate($page = null) {
        try {
            $fichier = TL_ROOT.'/pages/'.(is_null($page) ? 'index.php' : $page.'.php');
            if (file_exists($fichier)) {
                include $fichier;
            } else {
                include TL_ROOT.'/pages/index.php';
            }
        } catch (Exception $e) {
            error_log("Erreur lors du chargement de la page : " . $e->getMessage());
        }
    }

    function getArticlesFromJson() {
        try {
            if (file_exists(DB_ARTICLES)) {
                $contenu_json = file_get_contents(DB_ARTICLES);
                return json_decode($contenu_json, true);
            }
        } catch (Exception $e) {
            error_log("Erreur lors de la récupération des articles : " . $e->getMessage());
        }
        return null;
    }

    function getArticleById($id_article = null) {
        try {
            if (file_exists(DB_ARTICLES)) {
                $contenu_json = file_get_contents(DB_ARTICLES);
                $_articles = json_decode($contenu_json, true);
    
                foreach ($_articles as $article) {
                    if ($article['id'] == $id_article) {
                        return $article;
                    }
                }
            }
        } catch (Exception $e) {
            error_log("Erreur lors de la récupération de l'article : " . $e->getMessage());
        }
        return null;
    }
?>