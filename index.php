<?php
require_once 'lib/init.php';

// // Initialize the PageLoader with the desired template and page folders
// $pageLoader = new PageLoader('template', 'pages');

// // Load the page content along with the header and footer
// $pageLoader->loadPage();


require_once 'template/header.php';
require_once loadPage();
require_once 'template/footer.php';
