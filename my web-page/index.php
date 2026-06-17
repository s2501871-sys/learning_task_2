<html>
   <head>
      <title>My Web Page</title>
      <link rel="stylesheet" type="text/css" href="css/styles.css">
   </head>
   <body>
      <div id="wrapper">
         <div class="header">
         </div>
         <div class="main_navigation">
            <a href="index.php">Home</a> /
            <a href="about_us.php"> About Us</a> /
            <a href="mission_vision.php"> Mission and Vision </a> /
            <a href="gallery.php">Gallery</a> /
         </div>
         <div class="container">
            <h1>Home</h1>
         <?php
            switch(@$_GET["page"])
            {
               case"about_us":
                  include("about_us.php");
                  break;
               case "mission_vision":
                  include("mission_vision.php");
                  break;
               case "gallery":
                  include("gallery.php");
                  break;
               default:
                  include("home.php");
                  break;
            }
         ?>
         </div>
         <div class="footer">
         </div>
      </div>
   </body>
</html>