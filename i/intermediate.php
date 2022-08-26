<!DOCTYPE html>
<html>
<head>
  <title>Race Academy Hub</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../stylesheets/style3.css">
  <link rel="stylesheet" type="text/css" href="navstyle.css">
  <script src="https://kit.fontawesome.com/927f21ce6c.js" crossorigin="anonymous"></script>
  <script>
    function changeStyle(){
        var element = document.getElementById("myElement");
        element.style.margin = "20px";
    }
    </script>
    <script>
  function go(loc) {
    document.getElementById('test').src = loc;
  }
  </script>
</head>
<body>
  <div id="mySidenav" class="sidenav">
       <a href="../index.php"><img src="https://i.imgur.com/wNwwGPs.png" style="width:90%" class="logo"></a>
    <a class="item" href="../b/beginner.php"><img style="width: 100%; padding: 5px" src="../assets/b.png"></a>
    <a class="item" href=""><img style="width: 100%;padding: 5px" src="../assets/i.png"></a>
    <a class="item" href="../a/advanced.php"><img style="width: 100%;padding: 5px" src="../assets/a.png"></a>
</div>
<div id="mySidenav2" class="sidenav">
<a class="items" id="topics" href="" style="cursor: default;">Topics</a>

  <nav>

  <label for="touch"><span>The Check In</span></label>               
  <input type="checkbox" id="touch"> 

  <ul class="slide">
    <li><a onclick="go('../resources/KNOWELDGE SHEET_INTERMEDIATE_THE CHECK IN_WEIGHT_AND BRAKING.pdf')" style="font-size: 11pt;" id="" href="#">The Check-In, Weight, And Braking</a></li> 
  </ul>

</nav> 

<nav>

  <label for="touchh"><span>Braking and The Racing Line</span></label>               
  <input type="checkbox" id="touchh"> 

  <ul class="slidee">
    <li><a onclick="go('../resources/KNOWELDGE SHEET_INTERMEDIATE_BRAKING_AND_THE_RACING_LINE.pdf')" href="#">Braking and the Racing Line </a></li> 
  <li><a onclick="go('../resources/WORK_SHEET_INTERMEDIATE_CORNERS_AND_BRAKING_.pdf')" href="#">Corners and Braking</a></li> 
  </ul>

</nav> 

<nav>

  <label for="touchhh" onclick="go('../resources/KNOWELDGE SHEET_INTERMEDIATE_TRAIL_BRAKING_AND_BALANCING.pdf')"><span>Trail Braking and Balancing </span></label>               
  <input type="checkbox" id="touchhh"> 


</nav> 


<!--
  <a class="itemss" id="w" href="#">Equipment</a>
  <a class="itemss" id="d" href="#">Karts and the Track</a>
  <a class="itemss" id="d" href="#">Flags</a>
  <a class="itemss" id="d" href="#">The Racing Line</a>
  <a class="itemss" id="d" href="#">Kart Safety</a>
-->
 <!-- <div class="container-logos">
  <div id="yeaight"><i id="uno" class="fa-solid fa-2xl fa-download"></i></div>
  <div id="chiaight"><i id="dos" class="fa-solid fa-2xl fa-print"></i></div>
</div>-->
</div>


<div id="main">

<div class="pdf-container">
<iframe class="pdf" id="test" src="test.pdf" width="50%" height="900px">
    </iframe></div>
</div> 





<!--	-->
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
  <title>Race Academy Hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../stylesheets/style3.css">
  <link rel="stylesheet" type="text/css" href="navstyle.css">
  <script src="https://kit.fontawesome.com/927f21ce6c.js" crossorigin="anonymous"></script>
  <script>
    function changeStyle(){
        var element = document.getElementById("myElement");
        element.style.margin = "20px";
    }
    </script>
</head>
<body>
  <div id="mySidenav" class="sidenav">
       <img src="https://i.imgur.com/wNwwGPs.png" style="width:90%" class="logo">
    <a class="item" href="#"><img style="width: 100%; padding: 5px" src="../assets/b.png"></a>
    <a class="item" href="#"><img style="width: 100%;padding: 5px" src="../assets/i.png"></a>
    <a class="item" href="#"><img style="width: 100%;padding: 5px" src="../assets/a.png"></a>
</div>
<div id="mySidenav2" class="sidenav">
<a class="items" id="topics" href="#">Topics</a>

  <a class="itemss" id="w" href="#">Equipment</a>
  <a class="itemss" id="d" href="#">Karts and the Track</a>
  <a class="itemss" id="d" href="#">Flags</a>
  <a class="itemss" id="d" href="#">The Racing Line</a>
  <a class="itemss" id="d" href="#">Kart Safety</a>


</div>


<div id="main">

<div class="pdf-container">
<iframe class="pdf" src="test.pdf" width="50%" height="900px">
    </iframe></div>
</div> 



</body>
</html>-->