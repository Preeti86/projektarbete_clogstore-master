
<?php
// index.php
session_start();

require 'classes/user.class.php';
$user = new User();

// Konfigurationer
require_once("includes/settings.inc.php");
// Anslut till DB
require_once("includes/db.inc.php");

// Inkludera fil med hjälpfunktioner
require_once("includes/functions.inc.php");

// Läs in fil med definierade routes
require_once("includes/routes.inc.php");



// 1. Koll om personen loggar in som admin eller användare
// 2. Laddar upp controllers för vilken roll

// Deklarerar variabel för switch-sats

//$user = 'isUserLoggedIn';
//if ($user->isUserLoggedIn()) {
    //Jämför deklarerad stad med etiketter
 /*   switch ($_GET['uid']) {
        case 1:

    }
//}*/

if ($user->isUserAdmin()) {

        // Är den inloggade användaren Admin
          $controller = $_GET['controller'] ?? "frontpage";
            if (!array_key_exists($controller, $routes))
                $controller = "frontpage";

            require_once("admin_controllers/" . $routes[$controller]);

        } else {
        // Annars (inloggad användare inte admin ELLER ingen inloggadanvändare alls:
            // Om det finns någon getparameter controller:
           $controller = $_GET['controller'] ?? "default";
            // Om angiven controller inte finns i vår routesarray, sätt till "default"
            if (!array_key_exists($controller, $routes))
                $controller = "default";

            require_once("user_controllers/" . $routes[$controller]);
    }