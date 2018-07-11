<?php

session_start();

$_SESSION['articles_per_page'] = $_SESSION['articles_per_page'] ?? 8;

require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

//define('ARTICLES_PER_PAGE',8);

// TENARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : '1';
$searchterm = isset($_GET['searchterm']) ? '%' . $_GET['searchterm'] . '%' : '%';

echo($_SESSION['articles_per_page']);

if (isset($_POST['submit_login'])) {
    login_action();
}

if(isset($_POST['submit_edit'])){
    edit_after_submit_action();
}

if(isset($_POST['submit_image'])){
    image_action();
}

if (isset($_GET['width'])) {
    ajax_action();
}

switch ($page){
    case 'logout':  logout_action();                break;
    case 'home':    homepage_action($smarty);       break;
    case 'news':    news_action();                  break;
    case 'contact': contact_action();               break;
    case 'login':   login_page_action();            break;
    case 'admin':   admin_action();                 break;
    case 'delete':  delete_action();                break;
    case 'edit':    edit_action();                  break;
    case 'create':  create_action();                break;
    default:        page_not_found_action($smarty); break;
}
