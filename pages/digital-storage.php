<?php
    // Import the php back-end 
    include('../mains/digital-storage-main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Digital Storage - PHP Unit Converter</title>
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
  
    <h2>Digital Storage</h2>
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
  
         <input type="number" name="y_number" value="<?= $y_number; ?>"  disabled>
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
          <input type="radio" name="x_unit" value="bit" <?= $x_bit_checked; ?>>
          Bit
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="byte" <?= $x_byte_checked; ?>>
          Byte
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="kilobit" <?= $x_kilobit_checked; ?>>
          Kilobit
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="kilobyte" <?= $x_kilobyte_checked; ?>>
          Kilobyte
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="megabit" <?= $x_megabit_checked; ?>>
          Megabit
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="megabyte" <?= $x_megabyte_checked; ?>>
          Megabyte
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="gigabit" <?= $x_gigabit_checked; ?>>
          Gigabit
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="gigabyte" <?= $x_gigabyte_checked; ?>>
          Gigabyte
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="terabit" <?= $x_terabit_checked; ?>>
          Terabit
         </li>

         <li>
          <input type="radio" name="x_unit" value="terabyte" <?= $x_terabyte_checked; ?>>
          Terabyte
         </li>
        </ul>
  
        <ul class="right">
         <li>
          Bit
          <input type="radio" name="y_unit" value="bit" <?= $y_bit_checked; ?>>
         </li>
   
         <li>
          Byte
          <input type="radio" name="y_unit" value="byte" <?= $y_byte_checked; ?>>
         </li>
   
         <li>
          Kilobit
          <input type="radio" name="y_unit" value="kilobit" <?= $y_kilobit_checked; ?>>
         </li>
   
         <li>
          Kilobyte
          <input type="radio" name="y_unit" value="kilobyte" <?= $y_kilobyte_checked; ?>>
         </li>
   
         <li>
          Megabit
          <input type="radio" name="y_unit" value="megabit" <?= $y_megabit_checked; ?>>
         </li>
   
         <li>
          Megabyte
          <input type="radio" name="y_unit" value="megabyte" <?= $y_megabyte_checked; ?>>
         </li>
   
         <li>
          Gigabit
          <input type="radio" name="y_unit" value="gigabit" <?= $y_gigabit_checked; ?>>
         </li>
   
         <li>
          Gigabyte
          <input type="radio" name="y_unit" value="gigabyte" <?= $y_gigabyte_checked; ?>>
         </li>
   
         <li>
          Terabit
          <input type="radio" name="y_unit" value="terabit" <?= $y_terabit_checked; ?>>
         </li>

         <li>
          Terabyte
          <input type="radio" name="y_unit" value="terabyte" <?= $y_terabyte_checked; ?>>
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