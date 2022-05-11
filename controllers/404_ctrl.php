<?php require_once './models/RouterApp.class.php';
$routerApp = new RouterApp();
$error = isset($_GET['error']) ? $routerApp->retrieveTextInURL($_GET['error']) : 'La page n\'a pas été trouvé...';
?>