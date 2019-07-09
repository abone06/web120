<!DOCTYPE html>
<html>
<head>
<title>WEB120 Portal - Edit this code to make it your own!</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i>Alejandro Bone SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/me.png" class="desktop" alt="Alejandro Bone"/>
 <img src="images/me.png" class="phone" alt="Alejandro Bone" />
 <p>Hi, my name is <strong>Alejandro Bone</strong> and I am a mexican guy that loves the technology and have a lot of passion to learn need stuff when it’s related to technology. </p>
 <p>When I am not studying, I love to play videogames, board games or go outside and do some hiking’s or run in a park with a nice view like Alkai beach with the company of a dog because another thing that I like a lot are dogs. 
</p>
 <p>My goal for this class is to learn php and how to create sites for web/mobile/tablet sites; since now in days the developers should be able to create site for those platforms; in fact, the TVs are also another screen that should be able, so learning how to create this site for several screens will be  a nice goal.</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>More about Alejandro...</h3>
 <img src="images/kayak.png" class="tablet" alt="Kayak" />
 <p>Some of my favorites sports in Seattle is doing kayak on summer because the weather is super nice to go out side to do some water sports. I have done kayak in Lake Union, Kirkland Lake and in Green Lake. This year I am hoppoing to be able to do Kayak in Angel Lake.</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; <?php echo date("Y");?> by <a href="#" target="_blank">Alejandro Bone</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>
