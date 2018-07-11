<?php

// DATA OPHALEN EN EEN VIEW IN BEELD BRENGEN

function homepage_action() {
    //Model
    global $smarty;
    $articles = get_articles();
    $smarty->assign('articles',$articles);
    //Views
    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');
}

function page_not_found_action(){
    global $smarty;
    $smarty->display('notfound.tpl');
}

function contact_action(){
    global $smarty;
    //model

    //vieuws
    $smarty->display('header.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');
}

function news_action() {
    global $smarty, $pageno, $searchterm;
    //MODEL
    $articles = get_some_articles();
    $number_of_pages = get_number_of_pages();
    $smarty->assign('current_page',$pageno);
    $smarty->assign('number_of_pages',$number_of_pages);
    $smarty->assign('articles',$articles);
    // VIEUWS
    $smarty->display('header.tpl');
//    echo '<span id="articles">' . $_SESSION['articles_per_page'] . '</span>' .
//         '<span id="count"></span>';
    $smarty->display('news.tpl');
    $smarty->display('footer.tpl');
}

function login_page_action(){
    global $smarty;
    //model

    //vieuws
    $smarty->display('header.tpl');
    $smarty->display('login.tpl');
    $smarty->display('footer.tpl');
}

function admin_action(){
    global $smarty;
    if (isset($_COOKIE['userid'])) {
        cookie_acion();
        //model

        //vieuws
        $smarty->display('header.tpl');
        $smarty->display('admin.tpl');
        admin_page_action();
        $smarty->display('footer.tpl');
    } else {
        header('Location: index.php?page=home');
    }
}

function delete_action(){
    global $smarty;
    if (isset($_COOKIE['userid'])) {
        cookie_acion();
        delete();
    } else {
        header('Location: index.php?page=home');
    }
}

function edit_action(){
    $id             = $_GET['id'];
    $voornaam       = $_GET['voornaam'];
    $tussenvoegsel  = $_GET['tussenvoegsel'];
    $achternaam     = $_GET['achternaam'];
    global $smarty;
    if (isset($_COOKIE['userid'])) {
        cookie_acion();
        $smarty->assign('id',$id);
        $smarty->assign('voornaam',$voornaam);
        $smarty->assign('tussenvoegsel',$tussenvoegsel);
        $smarty->assign('achternaam',$achternaam);
        $smarty->display('header.tpl');
        $smarty->display('edit.tpl');
        $smarty->display('footer.tpl');

    } else {
        header('Location: index.php?page=home');
    }
}

function create_action(){
    global $smarty;
    if (isset($_COOKIE['userid'])) {
        cookie_acion();
        //model

        //vieuws
        $smarty->display('create.tpl');
    } else {
        header('Location: index.php?page=home');
    }
}

function edit_after_submit_action(){
    edit_update();
}

function image_action(){
    image_upload();
}

function login_action(){
    login_check();
}

function cookie_acion(){
    cookie_check();
}

function logout_action() {
    logout();
}

function ajax_action() {
    update_page();
}

