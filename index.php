<?php
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

require 'header.php';
require 'top_nav.php';
?>

<?php
// Get the requested route from the URL



// Route the request to the appropriate file
switch ($route) {
    case 'home':
        require 'home.php';
        break;
    case 'about':
        require 'about.php';
        break;
    case 'location':
        require  'location.php';
        break;
    case 'about':
        require 'about.php';
        break;
    default:
        require '404.php';
        break;
}
?>


<?php
require 'footer.php';
?>