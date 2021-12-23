<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Verwaldungssoftware</title>
</head>



<body>
    <!-- SEPERATOR  -->

    <section class="center h-full">
        <div class="mainBG">
            <h1 style="color:#fff;">Verwaltungssoftware</h1>
            <div class="img-Container">
                <img src="../images/header-image.png" alt="">
            </div>
            <div class="fusion-section-separator section-separator fusion-section-separator-with-offset">
                <svg class="fusion-slant-candy seperator-SVG" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
                    <path d="M100 10 L-2 100 L101 100 Z"></path>
                </svg>
            </div>
        </div>


        <h2>Teilnehmer hinzufügen</h2>

        <form action="addTeilnehmer.php" method="post" class="form-container morph">

            <div class="">
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="text" name="Nachname" id="nachname" placeholder="Vorname">
            </div>

            <div class="align">
                <input type="text" name="Startnummer" id="Startnummer" placeholder="Startnummer">
            </div>


            <div class="align">
                <input type="radio" name="Geschlecht" id="männlich" value="Männlich">
                <label for="männlich">Männlich</label>
            </div>

            <div class="align">
                <input type="radio" name="Geschlecht" id="weiblich" value="Weiblich">
                <label for="weiblich">Weiblich</label>
            </div>

            <div class="align">
                <label for="age">Alter</label>
                <select name="Age" id="Age">
                    <option value="bis 35">Bis 35</option>
                    <option value="ab 35 bis 50">Ab 35 bis 50</option>
                    <option value="über 50">Über 50</option>
                </select>
            </div>
            <div class="align">
                <label for="Strecke">Strecke</label>
                <select name="Strecke" id="Strecke">
                    <option value="10KM">10 KM</option>
                    <option value="20 KM">20 KM</option>
                </select>
            </div>

            <div>
                <input type="submit" value="Bestätigen" class="submit">
                <input type="reset" value="Abbrechen" class="abb">
            </div>
        </form>
    </section>


    <section class=" center h-full mt-50">
        <div class="mainBG auswertung-bg">
            <div class="fusion-section-separator section-separator fusion-section-separator-with-offset">
                <svg class="fusion-slant-candy seperator-SVG" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
                    <path d="M100 10 L-2 100 L101 100 Z"></path>
                </svg>
            </div>
        </div>

        <h2>Auswertung Eintragen</h2>

        <form action="auswertungEintragen.php" method="post" class="form-container morph form-container-small">

            <div class="align gap-5">
                <input type="text" name="Startnummer" id="Startnummer" placeholder="Startnummer">
                <input type="time" step="1" name="Time" id="Time">
            </div>

            <input type="submit" value="Bestätigen" class="submit">

        </form>


        <hr class="seperator-HR">

        <h2>Auswertung Anzeigen</h2>


        <div class="flex">
            <div>
                <form action="?action=submitFunc" method="post" class="form-container form-container-small">
                    <div class=" flex-col gap-5">
                        <input type="text" name="nameGet" id="name" placeholder="Name">
                        <input type="number" name="StartnummerGet" id="start" placeholder="Startnummer">
                    </div>

                    <input type="submit" value="Bestätigen" class="submit">

                </form>


                <form action="allUserStrecke.php" method="get" class="form-container form-container-small">

                    <select name="Strecke" id="Strecke">
                        <option value="10KM">10 KM</option>
                        <option value="20 KM">20 KM</option>
                    </select>
                    <input type="submit" value="Alle Teilnehmer anzeigen" class="submit">
                </form>



                <form action="allUserAge.php" method="get" class="form-container form-container-small">

                    <select name="Age" id="Age">
                        <option value="bis 35">Bis 35</option>
                        <option value="ab 35 bis 50">Ab 35 bis 50</option>
                        <option value="über 50">Über 50</option>
                    </select>
                    <input type="submit" value="Alle Teilnehmer anzeigen" class="submit">
                </form>
            </div>



        </div>
    </section>


    <section class=" center h-full mt-50">
        <div class="mainBG blog-bg">
            <div class="fusion-section-separator section-separator fusion-section-separator-with-offset">
                <svg class="fusion-slant-candy seperator-SVG" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
                    <path d="M100 10 L-2 100 L101 100 Z"></path>
                </svg>
            </div>
        </div>


        <h2>Blog</h2>

        <div class="w-full">

            <div class="flex gap-5 px-50">
                <div class="flex-col sum-blog-area">

                    <?php
                    $db = new mysqli('localhost', 'root', 'root', 'schulprojekt');


                    if ($db->connect_error) {
                        die("Connection failed: " . $db->connect_error);
                    }

                    $sql = "SELECT * FROM blog";

                    $result = $db->query($sql);

                    if ($result->num_rows > 0) {
                        foreach ($result as $row) {
                            echo "

                    <div class='blog-area'>
                        <span>" . $row['Name'] . "</span>
                        <p>" . $row['Eintrag'] . "</p>
                    </div>";
                        }
                    } else {
                        echo "Keine Einträge vorhanden";
                    }

                    ?>
                </div>

                <form action="writeBlog.php" method="post" class="write-blog">
                    <div class="blog-input">
                        <input type="text" name="name" id="name" placeholder="Name">
                        <textarea name="blogInput" id="blogInput" cols="30" rows="10" placeholder="Blog Eintrag erstellen"></textarea>
                    </div>
                    <div class="blog-button">
                        <input type="submit" value="Bestätigen" class="submit">
                        <input type="reset" value="Abbrechen" class="abb">
                    </div>
                </form>
            </div>

    </section>

</body>

</html>