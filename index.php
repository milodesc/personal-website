<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>patrickcjensen.com</title>

    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700|Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>

  </head>

  <body>
      
    <div class="menuButton">Menu</div>

    <div id="content-wrapper">

      <div class="navigation1">
          <ul>
              <li><a href="content/about.php" class="navlink">About</a></li>
              <li><a href="content/work.php" class="navlink">Work</a></li>
              <li><a href="content/blog.php" class="navlink">Blog</a></li>
              <li><a href="content/connect.php" class="navlink">Connect</a></li>
          </ul>
      </div>

      <h1 id="heading"><a href="/">patrick<span class="alt-text">c</span>jensen<span class="alt-text">.com</span></a></h1>

      <div id="content-mainbox">

<!-- header ends -->

  <div id="main-content">
    <div id="main-text-box">
      <div id="content-title">About</div>

        <div id="content-body">A certain top-hatted president once said: "I like to see a man proud of the place in which he lives. I like to see a man live so that his place will be proud of him."<br /><br />

I aim to be the type of person Lincoln would like to see. By advocating for effective city planning, sustainable transportation, and the appropriate use of technology, I believe I can help shape places into something I am proud of while gaining the pride of the places I shape.
        </div>

    </div>
  </div>

<!-- footer begins -->

</div>

</div>

<div id="footer" >Copyright 2011-<?php echo date (Y); ?></div>

<script>
$(document).ready(function() {

  //Change cursor to pointer when js is available because without js, the menu bar doesn't link to anything.
  $(".menuButton").css("cursor", "pointer");

  //Hide navigation when js is available to save some space.
  $(".navigation1").addClass("hideClass");

  //Drop down when menu is clicked.
  $(".menuButton").click(function() {
    $(".navigation1").toggleClass("hideClass", 500, "easeOutSine");
    /*
    $(".navigation1").animate({
        height: "toggle", opacity: "toggle"
      }, "slow");
    */
  });

  //Load new content when a menu link is clicked.
  $(".navigation1 a.navlink").click(function() {
    $(".navigation1 a.navlink").css("color", "#B3C3C7");
    $(this).css("color", "#EBCCA2");
    $("#content-body").hide().load($(this).attr("href")).fadeIn("slow");
    $("#content-title").hide().html($(this).html()).fadeIn("slow");
    return false;
  });

});
</script>

</body>

</html>


