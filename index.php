<?php
// Basic PHP template for modern calendar & scheduling application base
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calendrier & Planification - Base</title>
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
   <nav>
  <div class="container">
    <a href="#" id="brand">Brand</a>
    <button>
      <span></span>
      <span></span>
      <span></span>
    </button>
    
    <ul class="navbar-menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">page a</a></li>
      <li><a href="#">page b</a></li>
      <li><a href="#">page c</a></li>
      <li><a href="#">page d</a></li>
    </ul>
    
  </div>
</nav>

    <script>
       $(document).ready(function () {
  
  'use strict';
  
   var c, currentScrollTop = 0,
       navbar = $('nav');

   $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();
     
      currentScrollTop = a;
     
      if (c < currentScrollTop && a > b + b) {
        navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
        navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;
     
     console.log(a);
  });
  
});
    </script>
</body>
</html>

