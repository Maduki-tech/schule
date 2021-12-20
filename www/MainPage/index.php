<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Verwaldungssoftware</title>
</head>


<!-- https://www.youtube.com/embed/rCW8ELDwcIM?autohide=1&autoplay=1&fs=0&showinfo=0&modestBranding=1&start=0&controls=0&rel=0&disablekb=1&iv_load_policy=3&wmode=transparent&enablejsapi=1&origin=https%3A%2F%2Fwww.braveheartbattle.de&widgetid=1 -->

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

        <form action="postToDB.php" method="post" class="form-container morph">

            <div class="">
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="text" name="Nachname" id="nachname" placeholder="Vorname">
            </div>

            <div class="align">
                <input type="radio" name="gender" id="männlich">
                <label for="männlich">Männlich</label>
            </div>

            <div class="align">
                <input type="radio" name="gender" id="weiblich">
                <label for="weiblich">Weiblich</label>
            </div>

            <div class="align">
                <label for="age">Alter</label>
                <select name="age" id="age">
                    <option value="bis 35">Bis 35</option>
                    <option value="ab 35 bis 50">Ab 35 bis 50</option>
                    <option value="über 50">Über 50</option>
                </select>
            </div>


            <div class="align">
                <label for="strecke">Strecke</label>
                <select name="strecke" id="strecke">
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

        <h2>Auswerung Eintragen</h2>

        <form action="postToDB.php" method="post" class="form-container morph form-container-small">

            <div class="align gap-5">
                <input type="text" name="name" id="name" placeholder="Startnummer">
                <input type="text" name="Nachname" id="nachname" placeholder="Zeit">
            </div>

            <input type="submit" value="Bestätigen" class="submit">

        </form>


        <hr class="seperator-HR">

        <h2>Auswertung Anzeigen</h2>

        <div class="flex">
            <div>
                <form action="getUser.php" method="get" class="form-container form-container-small">
                    <div class=" flex-col gap-5">
                        <input type="text" name="name" id="name" placeholder="Name">
                        <input type="text" name="Nachname" id="nachname" placeholder="Vorname">
                    </div>
                </form>
            </div>

            <div>




                <!-- PHP RENDER THIS  -->
                <table class="tg">
                    <thead>
                        <tr>
                            <th class="tg-baqh">Nummer</th>
                            <th class="tg-data">Name</th>
                            <th class="tg-data">Vorname</th>
                            <th class="tg-data">Zeit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tg-data">test</td>
                            <td class="tg-data">test1</td>
                            <td class="tg-data">test3</td>
                            <td class="tg-data">test4</td>
                        </tr>
                    </tbody>
                </table>
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

        <div class="flex">
            <div>
                <!---------------------- LOOP FOR ALL PHP DATABASE ENTRIES --------------------->
            </div>

            <div>

                <input type="text" name="name" id="name" placeholder="Name">
                <textarea name="blogInput" id="blogInput" cols="30" rows="10" placeholder="Blog Eintrag erstellen"></textarea>

                <input type="submit" value="Bestätigen" class="submit">
                <input type="reset" value="Abbrechen" class="abb">

            </div>

    </section>

</body>

</html>