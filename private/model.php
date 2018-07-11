<?php

function make_connection() {
    $mysqli = new mysqli('localhost','root','','myband_db');
    if($mysqli->connect_errno) {
        die('Connecting Error' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_articles(){
    $mysqli = make_connection();
    $query = "SELECT title FROM articles";
    $stmt = $mysqli->prepare($query) or die ('Error preparing 1.');
    $stmt->bind_result($title) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()){
        $results[] = $title;
    }
    return $results;
}

function get_some_articles(){
    global $pageno, $searchterm;
    $mysqli = make_connection();
    $firstrow = ($pageno - 1) * $_SESSION['articles_per_page'];
    $per_page = $_SESSION['articles_per_page'];

    $query =    "SELECT title, content, imagelink ";
    $query .=   "FROM articles ";
    $query .=   "WHERE title LIKE ? OR ";
    $query .=   "content LIKE ? ";
    $query .=   "ORDER BY article_id ";
    $query .=   "DESC LIMIT $firstrow,$per_page";

    $stmt = $mysqli->prepare($query) or die ('Error preparing 2.');
    $stmt->bind_param('ss',$searchterm,$searchterm) or die ('Error binding search terms');
    $stmt->bind_result($title,$content,$imagelink) or die ('Error binding results 2.');
    $stmt->execute() or die ('Error executing 2.');
    $results = array();
    while ($stmt->fetch()){
        $article = array();
        $article[] = $title;
        $article[] = $content;
        $article[] = $imagelink;
        $results[] = $article;
    }
    return $results;
}

function get_number_of_pages(){
    $number_of_pages = calculate_pages() or die ('Error calculating');
    return $number_of_pages;
}

function calculate_pages() {
    $mysqli = make_connection();
    $query = "SELECT * from articles";
    $result = $mysqli->query($query) or die ('Error querying');
    $rows = $result->num_rows;
    $number_of_pages = ceil($rows / $_SESSION['articles_per_page']);
    return $number_of_pages;
}

function login_check(){

    if(!isset($_POST['submit_login'])){
        header("Location: index.php?page=home");
    }

    if(empty($_POST['username']) OR empty($_POST['password'])) {
        echo "<a href='index.php?page=login'>ga terug</a>";
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = hash('sha512',$password) or die ('Error4');

    $mysqli = make_connection();
    $query = "SELECT userid, hash, active FROM users WHERE username = ? AND password = ?";
    $stmt = $mysqli->prepare($query) or die ('Error1');
    $stmt->bind_param('ss', $username, $password) or die ('Error2');
    $stmt->bind_result($userid, $hash ,$active) or die ('Error3');
    $stmt->execute() or die ('Error5');
    $fetch_success = $stmt->fetch();

    if(!$fetch_success){
        exit("<a href='index.php?page=login'>ga terug 1</a>");
    } else if($active == 0){
        exit("<a href='index.php?page=login'>ga terug 2</a>");
    }

    setcookie('userid',$userid, time() + 3600 * 24 * 7);
    $_SESSION['userid'] = $userid;
    setcookie('hash',$hash, time() + 3600 * 24 * 7);
    $_SESSION['hash'] = $hash;
    header("Location: index.php?page=admin");

}

function cookie_check(){
    if(!isset($_SESSION['userid'])) {
        if (!isset($_COOKIE['userid'])) {
            header("Location: index.php?page=home");
        } else {
            $mysqli = make_connection();
            $username = $_POST['username'];
            $userid = $_COOKIE['userid'];
            $hash = $_COOKIE['hash'];
            $query = "SELECT userid FROM users WHERE userid = ? AND hash = ?";
            $stmt = $mysqli->prepare($query) or die ('Error');
            $stmt->bind_param('is', $uderid, $hash) or die ('Error');
            $stmt->bind_result($userid) or die ('Error');
            $stmt->execute() or die ('Error');
            $fetch_success = $stmt->fetch();

            if(!$fetch_success){
                logout();
            }
            $_SESSION['userid'] =  $_COOKIE['userid'];
            $_SESSION['hash'] =  $_COOKIE['hash'];
        }
    }
}

function logout(){

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time() - 100);
    }

    $_SESSION = array();
    session_unset();
    session_destroy();

    if(isset($_COOKIE['userid'])){
        setcookie('userid', '', time() - 100);
        setcookie('hash', '', time() - 100);
    }
    header('Location: index.php?page=home');

}

function admin_page_action(){
    $mysqli = make_connection();
    $query = "SELECT * FROM articles";
    $result = mysqli_query($mysqli, $query) or die ('error querying.');
    echo '<table>';

    while ($row = mysqli_fetch_array($result)) {

        $id = $row['article_id'];
        $voornaam = $row['title'];
        $tussenvoegsel = $row['content'];
        $achternaam = $row['imagelink'];

        echo '<tr>';
        echo "<td>$id</td><td>$voornaam</td><td>$tussenvoegsel</td><td>$achternaam</td>";
        echo '<td>';
        echo '<a href="index.php?page=delete&id=' . $id . '">DELETE</a>';
        echo '</td>';
        echo '<td>';
        echo '<a href="index.php?page=edit&id=' . $id . '&voornaam=' . $voornaam . '&tussenvoegsel=' . $tussenvoegsel . '&achternaam=' . $achternaam . '">EDIT</a>';
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';

    mysqli_close($mysqli);
}

function delete(){

    $id = $_GET['id'];
    $mysqli = make_connection();
    $query = "DELETE FROM articles WHERE article_id = '$id' ";
    $result = mysqli_query($mysqli, $query) or die ('kan resultaten niet naar voren halen');
    header("location: index.php?page=admin");
}

function edit_update(){
    $id = $_POST['id'];
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];

    $mysqli = make_connection();
    $query = "UPDATE articles ";
    $query .= "SET title = '$voornaam', content = '$tussenvoegsel', imagelink = '$achternaam' ";
    $query .= "WHERE article_id = '$id'";
    $result = mysqli_query($mysqli, $query) or die ('error updating');
    header("location: index.php?page=admin");
}

function image_upload(){
    echo 'naam van de file: ' . $_FILES['uploaded_image']['name'] . '<br>' .
    ' Groote van file in bytes: ' . $_FILES['uploaded_image']['size'] . '<br>' .
    ' Tijdelijke opslag locatie: ' . $_FILES['uploaded_image']['tmp_name'];

// IMAGE OP JUISTE PLEK

    $temp_location = $_FILES['uploaded_image']['tmp_name'];
    $target_location = 'images/' . time() . $_FILES['uploaded_image']['name'];

    move_uploaded_file($temp_location, $target_location) or die ('Error moving image.');

//DATA BASE VAN IMAGE

    $title = $_POST['title'];
    $description = $_POST['description'];

    $mysqli = make_connection();
    $query = "INSERT INTO articles VALUES (0,?,?,?)";
    $stmt = $mysqli->prepare($query) or die ('Error 2');
    $stmt->bind_param('sss',$title,$description,$target_location) or die ('Error 3');
    $stmt->execute() or die ('Error 4');
    $stmt->close();

    header('Location: index.php?page=create');
}

function update_page(){

    $width = $_GET['width'];

    if($width < 600){
        $_SESSION['articles_per_page'] = $_SESSION['articles_per_page'] ?? 4;
    } else if ($width < 768){
        $_SESSION['articles_per_page'] = $_SESSION['articles_per_page'] ?? 6;
    } else if ($width < 992){
        $_SESSION['articles_per_page'] = $_SESSION['articles_per_page'] ?? 6;
    } else if ($width < 1200){
        $_SESSION['articles_per_page'] = $_SESSION['articles_per_page'] ?? 8;
    } else if ($width > 1201){
        $_SESSION['articles_per_page'] = $_SESSION['articles_per_page'] ?? 10;
    } else {
        exit("INTERNAL SERVER ERROR UPDATING AJAX");
    }
}