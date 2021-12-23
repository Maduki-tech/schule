<?php

// CONNECT TO DB
$db = new mysqli('localhost', 'root', 'root', 'schulprojekt');

$time = $_POST['Time'];

// IF ERROR
if ($db->connect_error) {
    // DIE AND SHOW ERROR
    die('Connection failed: ' . $db->connect_error);
}

// UPDATE SQL DATA
$sql = "UPDATE `teilnehmer` SET Zeit = '" . $time . "' WHERE Startnummer = '" . $_POST['Startnummer'] . "'";

if ($db->query($sql) === TRUE) {
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");
} else {
    // SHOW ERROR IF QUERY WAS NOT SUCCESSFUL
    echo $db->error;
}

$db->close();
