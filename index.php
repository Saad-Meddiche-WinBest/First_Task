<?php
require_once './autoload.php';

/* In this array we stock only the pages that the user can see */
$pages = ['home', 'aPropos', 'blog', 'contact', 'notreEntreprise', 'nuisibles', 'auditAnalyseDuBesoin', 'controleAcces', 'cybergardiennage', 'depannageCamera', 'detectionIncendie', 'detectionIntrusion', 'installationCamera', 'securiteGardiennage', 'venteCamera', 'videoprotection'];
$base_pages = ['aPropos', 'blog', 'notreEntreprise', 'nuisibles', 'auditAnalyseDuBesoin', 'controleAcces', 'cybergardiennage', 'depannageCamera', 'detectionIncendie', 'detectionIntrusion', 'installationCamera', 'securiteGardiennage', 'venteCamera', 'videoprotection'];


// Check the url if it is contain ?page
// If Not goto Home page
if (isset($_GET['page'])) {

    //check if the entred value  is located in the array page
    // if Not show 404
    if (in_array($_GET['page'], $pages)) {

        require_once './views/includes/header.php';

        if (in_array($_GET['page'], $base_pages)) {
            HomeController::index('basePage');
        } else {
            HomeController::index($_GET['page']);
        }

        require_once './views/includes/footer.php';
    } else {
        include('views/includes/404.php');
    }
} else {
    require_once './views/includes/header.php';
    HomeController::index('home');
    require_once './views/includes/footer.php';
}
