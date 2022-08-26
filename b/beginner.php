<!DOCTYPE html>
<html>
    <head>
        <title>Race Academy Hub</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../stylesheets/style3.css" />
        <link rel="stylesheet" type="text/css" href="navstyle.css" />
        <script src="../scripts/go.js" async></script>
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <a href="../index.php"><img src="https://i.imgur.com/wNwwGPs.png" style="width: 90%;" class="logo" /></a>
            <a class="item" href=""><img style="width: 100%; padding: 5px;" src="../assets/b.png" /></a>
            <a class="item" href="../i/intermediate.php"><img style="width: 100%; padding: 5px;" src="../assets/i.png" /></a>
            <a class="item" href="../a/advanced.php"><img style="width: 100%; padding: 5px;" src="../assets/a.png" /></a>
        </div>
        <div id="mySidenav2" class="sidenav">
            <a class="items" id="topics" href="" style="cursor: default;">Topics</a>
            <nav>
                <label for="touch"><span>Equipment</span></label>
                <input type="checkbox" id="touch" />
                <ul class="slide">
                    <li><a onclick="go('../resources/KNOWELDGE SHEET_Equipment_Helmets.pdf')" id="" href="#">The Helmet</a></li>
                    <li><a onclick="go('../resources/WORK_SHEET_DESIGN A HELMET.pdf')" href="#">Design Your Own Helmet</a></li>
                    <li><a onclick="go('../resources/WORK_SHEET_HELMET QUIZ.pdf')" href="#">Helmet Quiz</a></li>
                    <li><a onclick="go('../resources/KNOWELDGE SHEET_Equipment_Gloves_Boots_and_Race_Suits.pdf')" href="#">Gloves, Boots, and Race Suits</a></li>
                </ul>
            </nav>
            <nav>
                <label for="touchh"><span>Karts and the Track</span></label>
                <input type="checkbox" id="touchh" />
                <ul class="slidee">
                    <li><a onclick="go('../resources/KNOWELDGE SHEET_BEGINNER_The_Karts_And_Track.pdf')" href="#">Karts and the Track</a></li>
                </ul>
            </nav>
            <nav>
                <label for="touchhh"><span>Flags</span></label>
                <input type="checkbox" id="touchhh" />
                <ul class="slideee">
                    <li><a onclick="go('../resources/KNOWELDGE SHEET_BEGINNER_The_Flags.pdf')" href="#">The Flags</a></li>
                    <li><a onclick="go('../resources/WORK_SHEET_FLAG_QUIZ.pdf')" href="#">The Flags Quiz</a></li>
                </ul>
            </nav>
            <nav>
                <label for="touchhhh"><span>The Racing Line</span></label>
                <input type="checkbox" id="touchhhh" />
                <ul class="slideeee">
                    <li><a onclick="go('../resources/KNOWELDGE SHEET_BEGINNER_The_Racing_Line.pdf')" href="#">Beginner Racing Line</a></li>
                </ul>
            </nav>
            <nav>
                <label for="touchhhhh"><span>Kart Safety</span></label>
                <input type="checkbox" id="touchhhhh" />
                <ul class="slideeeee">
                    <li><a onclick="go('../resources/KNOWELDGE SHEET_BEGINNER_Getting In A Kart Safely_and_Kart_Controls.pdf')" href="#">Kart Controls</a></li>
                </ul>
            </nav>
        </div>
        <div id="main">
            <div class="pdf-container">
                <iframe class="pdf" id="test" src="test.pdf" width="50%" height="900px"> </iframe>
            </div>
        </div>
    </body>
</html>
