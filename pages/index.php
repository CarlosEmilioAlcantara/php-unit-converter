<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Home - PHP Unit Converter</title>
 <link rel="icon" href="../assets/icons/php-logo.png">

 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="../style.css">

 <!-- Other fontawesome css files won't work -->
 <link rel="stylesheet" href="../assets/css/all.css">
</head>
<body id="body">
 <?php include '../parts/navbar.php'; ?>
  <aside>
   <header>
    <div class="burger">
     <span></span>
     <span></span>
     <span></span>
    </div>
  
    <h2>Instructions</h2>
   </header>

   <div class="content content-instructions">
    <div class="container wrapper wrapper-content">
     <img src="../assets/images/blackboard.jpg" alt="">

     <div class="content--text">
      <h2>What is this app?</h2>
      <p>
       This is an application written in PHP, HTML, CSS, and JS for converting different units
       of measurement.
      </p>
      
      <h2>Usage instructions:</h2>
      <ol>
       <li>Open the navbar by clicking on the burger menu on the top left.</li>
       <li>Select from the list of different measurements.</li>
       <li>Input the number to convert on either input boxes.</li>
       <li>
        Select which unit you want to convert to using either the left
        or right list of buttons.
       </li>
      </ol>
     </div>
    </div>
   </div>
  </aside>
 </div>
</body>
<script src="../js/navbar.js"></script>
</html>