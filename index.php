<?php
require_once './model/db.php';
$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
if ($controller == 'produit') {
    require_once './controller/produitcontroller.php';
} elseif ($controller == 'categorie') {
    require_once './controller/categoriecontroller.php';
} else {
    require_once './controller/utilisateurcontroller.php';
}


if (isset($_GET['action']) && !empty($_GET['action'])) {
    switch ($_GET['action']) {
        case 'delete':
            remove();
            break;
        case 'add':
            create();
            break;
        case 'save':
            save();
            break;
        case 'edit':
            edit();
            break;
        case 'update':
            update();
            break;
        default:
            echo "Action inconnue.";
    }
} else {
    index();
}
