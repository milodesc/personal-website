<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>patrickcjensen.com</title>

    <link rel="shortcut icon" href="images/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700|Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />

  </head>

  <body>
      
    <div class="menuButton">Menu</div>

    <div id="content-wrapper">

      <nav id="topNav" class="navigation">
        <?php include("navigation.php"); ?>
      </nav>

      <h1 id="heading"><a href="/">patrick<span class="alt-text">c</span>jensen<span class="alt-text">.com</span></a></h1>

      <div id="content-mainbox" class="clear">
        <div id="main-content">
          <div id="main-text-box">
            <h2 id="content-title">About</h2>

            <div id="content-body">
              <?php include("content/about.php"); ?>
            </div>

          </div>
        </div>
        <nav id="rightNav" class="navigation"><?php include("navigation.php"); ?></nav>
      </div>

    </div>

    <footer>Copyright 2011-<?php echo date (Y); ?></footer>

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
    <script>
      $(document).ready(function() {

        var menuButton = $(".menuButton"),
          topNav = $("#topNav"),
          navigationBars = $(".navigation li"),
          contentBody = $("#content-body"),
          contentTitle = $("#content-title");

        //Change cursor to pointer when js is available because without js, the menu bar doesn't link to anything.
        menuButton.css("cursor", "pointer");

        //Hide navigation when js is available to save some space.
        topNav.addClass("hideClass");

        //Drop down when menu is clicked.
        menuButton.click(function() {
          topNav.toggleClass("hideClass", 500, "easeOutSine");
        });

        //Load new content when a menu link is clicked.
        navigationBars.click(function() {
          navigationBars.addClass("inactiveNav").removeClass("activeNav");
          
          //Give the nav item that was clicked on some special styling in both navs
          var selectedNavItemName = this.innerHTML;
          navigationBars.filter(function(){
            return this.innerHTML == selectedNavItemName;
          }).addClass("activeNav").removeClass("inactiveNav");

          contentBody.hide().load($(this).parent().attr("href")).fadeIn("slow");
          contentTitle.hide().html($(this).html()).fadeIn("slow");
          return false;
        });

      });
    </script>

  </body>

</html>
