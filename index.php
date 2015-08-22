<?php
    $content_page = 'home.php';
    $comment_page =  'comments.php';
    $comments_page = 'comment.php';
    if (isset($_GET['page']))
    {
        $content_page = $_GET['page'] . ".php";
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>My Personal Portfolio</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">

 </head>
 <body>
 <div id="container">
    <div id="content">
        <span >J O L L Y  &nbsp;  A N N  &nbsp;  P &nbsp; D O L L O S O
       <p>________________________________________________</p>
<div id="links">
   <a id="home"     class="active" href="index.php?page=home">Home</a>
   <a id="about"    class="active" href="index.php?page=about">About Me</a>
   <a id="about"    class="active" href="index.php?page=photos">Photos</a>
   <a id="contact" class="active" href="index.php?page=contact">Contact</a>
</div>
        </span>



     <img src="images/bg.png">

    </div>
 </div>
                   <?php include $content_page; ?>
            </div>
                  <div class="back">
                         <div>
                       <?php include $comment_page; ?>
                         </div>
                </div>



</body>
 </html>