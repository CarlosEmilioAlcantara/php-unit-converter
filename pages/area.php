<?php
    // Import the php back-end 
    include("../mains/area-main.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Area - PHP Unit Converter</title>
 <link rel="icon" href="../assets/icons/php-logo.png">

 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="../style.css">

 <!-- Other fontawesome css files won't work -->
 <link rel="stylesheet" href="../assets/css/all.css">
</head>
<body id="body">   
 <?php 
    // Import the navigation bar
    include('../parts/navbar.php'); 
 ?>
  <aside>
   <header>
    <div class="burger">
     <span></span>
     <span></span>
     <span></span>
    </div>
  
    <h2>Area</h2>
   </header>
 
   <form class="content" action="" method="POST">
    <div class="container--content wrapper wrapper-content">
     <div class="container--content-item">
      <div class="content--top">
       <div class="content--left">
        <div class="content--title">
         <h2><?= $x_unit_header; ?></h2>
  
         <input type="number" name="x_number" step="any" value="<?= $x_number; ?>">
        </div>
  
        <h3>From</h3>
       </div>
  
       <div class="content--right right">
        <div class="content--title">
         <h2><?= $y_unit_header; ?></h2>
  
         <input type="number" name="y_number" value="<?= $y_number; ?>" disabled>
        </div>
  
        <h3>To</h3>
       </div>
      </div>
     </div>

     <input type="submit">

     <div class="container--content-item">
      <div class="scroller scroller-content">
       <div class="wrapper wrapper-bottom">
        <ul>
         <li>
          <input type="radio" name="x_unit" value="sq_km" <?= $x_sq_km_checked; ?>>
          Sq. Kilometer
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="sq_meter" <?= $x_sq_meter_checked; ?>>
          Sq. Meter
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="sq_cm" <?= $x_sq_cm_checked; ?>>
          Sq. Centimeter
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="hectare" <?= $x_hectare_checked; ?>>
          Hectare
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="sq_mile" <?= $x_sq_mile_checked; ?>>
          Sq. Mile
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="sq_yard" <?= $x_sq_yard_checked; ?>>
          Sq. Yard
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="sq_foot" <?= $x_sq_foot_checked; ?>>
          Sq. Foot
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="sq_inch" <?= $x_sq_inch_checked; ?>>
          Sq. Inch
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="acre" <?= $x_acre_checked; ?>>
          Acre
         </li>
        </ul>
  
        <ul class="right">
         <li>
          Sq. Kilometer
          <input type="radio" name="y_unit" value="sq_km" <?= $y_sq_km_checked; ?>>
         </li>
   
         <li>
          Sq. Meter
          <input type="radio" name="y_unit" value="sq_meter" <?= $y_sq_meter_checked; ?>>
         </li>
   
         <li>
          Sq. Centimeter
          <input type="radio" name="y_unit" value="sq_cm" <?= $y_sq_cm_checked; ?>>
         </li>
   
         <li>
          Hectare
          <input type="radio" name="y_unit" value="hectare" <?= $y_hectare_checked; ?>>
         </li>
   
         <li>
          Sq. Mile
          <input type="radio" name="y_unit" value="sq_mile" <?= $y_sq_mile_checked; ?>>
         </li>
   
         <li>
          Sq. Yard
          <input type="radio" name="y_unit" value="sq_yard" <?= $y_sq_yard_checked; ?>>
         </li>
   
         <li>
          Sq. Foot
          <input type="radio" name="y_unit" value="sq_foot" <?= $y_sq_foot_checked; ?>>
         </li>
   
         <li>
          Sq. Inch
          <input type="radio" name="y_unit" value="sq_inch" <?= $y_sq_inch_checked; ?>>
         </li>
   
         <li>
          Acre
          <input type="radio" name="y_unit" value="acre" <?= $y_acre_checked; ?>>
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </form>
  </aside>
 </div>
</body>
<script src="../js/navbar.js"></script>
</html>