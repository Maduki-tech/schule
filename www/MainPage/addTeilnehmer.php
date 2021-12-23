<?php

// CONNECT TO DB

use PhpMyAdmin\Scripts;

$db = new mysqli('localhost', 'root', 'root', 'schulprojekt');

// IF ERROR
if ($db->connect_error) {
    // DIE AND SHOW ERROR
    die('Connection failed: ' . $db->connect_error);
}

$name = $_POST['name'];
$Nachname = $_POST['Nachname'];
$Geschlecht = $_POST['Geschlecht'];
$Startnummer = $_POST['Startnummer'];
$Zeit = $_POST['Zeit'];
$Strecke = $_POST['Strecke'];
$Age = $_POST['Age'];


// INSERT NEW Paticipant

$sql = "Insert into teilnehmer (Vorname, Nachname,Geschlecht, Startnummer, Zeit, Strecke, Age)
 values 
 ('" . $_POST['name'] . "', '" . $_POST['Nachname'] . "' , '" . $_POST['Geschlecht'] . "', '" . $_POST['Startnummer'] . "', '" . '00:00' . "', '" . $_POST['Strecke'] . "', '" . $_POST['Age'] . "')";


// IF QUERY WAS SUCCESSFUL
if ($db->query($sql) === TRUE) {
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");
} else {
    // SHOW ERROR IF QUERY WAS NOT SUCCESSFUL
    echo $db->error;
}


$db->close();
