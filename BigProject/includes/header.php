<?php include 'bigproject-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/releases/v5.10.1/js/all.js" data-auto-replace-svg="nest"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/submenu.css">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/big.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="fas <?=$logo?>"></i>Alejandro Bone SCC Big Project</a></h1>
  <nav>
    <div id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i>Web120 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i>Home</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="##"><span><i class="fa fa-fw fa-chevron-down"></i>Big Research</span></a>
        <ul>
           <li><a href="sitevsapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
           <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i>Flex Box</span></a></li>
           <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i>Galleries</span></a></li>
            <li><a href="shopping.php"><span><i class="fa fa-fw fa-shopping-basket"></i>Shopping Carts</span></a></li>
        </ul>
     </li>
     <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
  </ul>
</div>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>