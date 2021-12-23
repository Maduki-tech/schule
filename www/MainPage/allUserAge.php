<?php

// CONNECT TO DB
$Age = $_GET['Age'];
$db = new mysqli('localhost', 'root', 'root', 'schulprojekt');

// IF ERROR
if ($db->connect_error) {
    // DIE AND SHOW ERROR
    die('Connection failed: ' . $db->connect_error);
}



$sql = "SELECT * FROM `teilnehmer` WHERE NOT `Zeit`='00:00:00' AND `Age`= '$Age' ORDER BY `teilnehmer`.`Zeit` ASC";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='tg'>";
    echo "<tr>";
    echo "<th class='tg-data'>Platz</th>";
    echo "<th class='tg-data'>Vorname</th>";
    echo "<th class='tg-data'>Nachname</th>";
    echo "<th class='tg-data'>Startnummer</th>";
    echo "<th class='tg-data'>Geschlecht</th>";
    echo "<th class='tg-data'>Alter</th>";
    echo "<th class='tg-data'>Strecke</th>";
    echo "<th class='tg-data'>Zeit</th>";

    echo "</tr>";

    $platz = 0;
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td class='tg-data'>" . $platz += 1 . "</td>";
        echo "<td class='tg-data'>" . $row['Vorname'] . "</td>";
        echo "<td class='tg-data'>" . $row['Nachname'] . "</td>";
        echo "<td class='tg-data'>" . $row['Startnummer'] . "</td>";
        echo "<td class='tg-data'>" . $row['Geschlecht'] . "</td>";
        echo "<td class='tg-data'>" . $row['Age'] . "</td>";
        echo "<td class='tg-data'>" . $row['Strecke'] . "</td>";
        echo "<td class='tg-data'>" . $row['Zeit'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Keine Ergebnisse gefunden";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg-data {
            text-align: center;

        }
    </style>

</body>

</html>