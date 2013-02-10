<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <title>patrickcjensen.com</title>

    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700|Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="images/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="./css/normalize.css" />

    <link rel="stylesheet" type="text/css" href="./css/style.css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>

  </head>

  <body>

    <div id="content-wrapper">

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
  </div><br clear="all">

<!-- footer begins -->

</div>

</div>

<div class="tabs">
    <ul class="tabNavigation" style="float:left; padding:1px;">
        <li><a href="content/about.php" class="navlink">About</a></li>
        <li><a href="content/work.php" class="navlink">Work</a></li>
        <li><a href="content/blog.php" class="navlink">Blog</a></li>
        <li><a href="content/connect.php" class="navlink">Connect</a></li>
    </ul>
</div>

<div id="footer" >Copyright 2011-<?php echo date (Y); ?></div>

<script>
$(document).ready(function() {
   $(".tabNavigation a").click(function() {
      $("#content-body").hide().load($(this).attr("href")).fadeIn("slow");
      $("#content-title").hide().html($(this).html()).fadeIn("slow");
      return false;
   });
});
</script>

</body>

</html>


