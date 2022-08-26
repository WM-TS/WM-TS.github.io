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
            <a class="item" href="../b/beginner.php"><img style="width: 100%; padding: 5px;" src="../assets/b.png" /></a>
            <a class="item" href="../i/intermediate.php"><img style="width: 100%; padding: 5px;" src="../assets/i.png" /></a>
            <a class="item" href=""><img style="width: 100%; padding: 5px;" src="../assets/a.png" /></a>
        </div>
        <div id="mySidenav2" class="sidenav">
            <a class="items" id="topics" href="" style="cursor: default;">Topics</a>

            <nav>
                <label onclick="go('../resources/KNOWELDGE SHEET_ADVANCED_RACECRAFT_OVERTAKING.pdf')" for="touch"><span>Race Craft Overtaking </span></label>
                <input type="checkbox" id="touch" />
            </nav>

            <nav>
                <label onclick="go('../resources/KNOWELDGE SHEET_ADVANCED_RACECRAFT_DEFENDING.pdf')" for="touchh"><span>Race Craft Defending </span></label>
                <input type="checkbox" id="touchh" />
            </nav>

            <nav>
                <label onclick="go('../resources/KNOWELDGE SHEET_ADVANCED_WINNERS_MINDSET.pdf')" for="touchhh"><span>Winners Mindset</span></label>
                <input type="checkbox" id="touchhh" />
            </nav>
        </div>

        <div id="main">
            <div class="pdf-container">
                <iframe class="pdf" id="test" src="test.pdf" width="50%" height="900px"> </iframe>
            </div>
        </div>
    </body>
</html>
