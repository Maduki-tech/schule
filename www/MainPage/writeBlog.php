<?php

$name = $_POST['name'];
$blog = $_POST['blogInput'];


$db = new mysqli('localhost', 'root', 'root', 'schulprojekt');


if ($db->connect_error) {
    // DIE AND SHOW ERROR
    die('Connection failed: ' . $db->connect_error);
}

$sql = "Insert into blog (Name, Eintrag) values ('$name', '$blog')";
// IF QUERY WAS SUCCESSFUL
if ($db->query($sql) === TRUE) {
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");
} else {
    // SHOW ERROR IF QUERY WAS NOT SUCCESSFUL
    echo $db->error;
}

$db->close();
