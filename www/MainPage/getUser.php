<?php
$name = $_GET['nameGet'];
$startnummer = (int)$_GET['StartnummerGet'];

// CONNECT TO DB
$db = new mysqli('localhost', 'root', 'root', 'schulprojekt');

// IF ERROR
if ($db->connect_error) {
    // DIE AND SHOW ERROR
    die('Connection failed: ' . $db->connect_error);
}


// if ($startnummer == "") {
//     $startnummer = "none";
// }

$sql = "SELECT * FROM teilnehmer WHERE Nachname = '$name' AND Startnummer = $startnummer OR Nachname = '$name' OR  Startnummer = $startnummer";

$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='tg'>";
    echo "<tr>";
    echo "<th class='tg-data'>Vorname</th>";
    echo "<th class='tg-data'>Nachname</th>";
    echo "<th class='tg-data'>Startnummer</th>";
    echo "<th class='tg-data'>Geschlecht</th>";
    echo "<th class='tg-data'>Alter</th>";
    echo "<th class='tg-data'>Strecke</th>";
    echo "<th class='tg-data'>Zeit</th>";
    echo "</tr>";

    foreach ($result as $row) {
        echo "<tr>";
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
        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

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