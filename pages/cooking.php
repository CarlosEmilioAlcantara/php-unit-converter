<?php
    include('../mains/cooking-main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Cooking - PHP Unit Converter</title>
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
  
    <h2>Cooking</h2>
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
          <input type="radio" name="x_unit" value="teaspoon" <?= $x_teaspoon_checked; ?>>
          Teaspoon
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="tablespoon" <?= $x_tablespoon_checked; ?>>
          Tablespoon
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="cup" <?= $x_cup_checked; ?>>
          Cup
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="fl_oz_us" <?= $x_fl_oz_us_checked; ?>>
          Fluid Ounce (US)
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="fl_oz_uk" <?= $x_fl_oz_uk_checked; ?>>
          Fluid Ounce (UK)
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="pint_us" <?= $x_pint_us_checked; ?>>
          Pint (US)
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="pint_uk" <?= $x_pint_uk_checked; ?>>
          Pint (UK)
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="quart_us" <?= $x_quart_us_checked; ?>>
          Quart (US)
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="quart_uk" <?= $x_quart_uk_checked; ?>>
          Quart (UK)
         </li>
  
         <li>
          <input type="radio" name="x_unit" value="gallon_us" <?= $x_gallon_us_checked; ?>>
          Gallon (US)
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="gallon_uk" <?= $x_gallon_uk_checked; ?>>
          Gallon (UK)
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="milliliter" <?= $x_milliliter_checked; ?>>
          Milliliter
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="liter" <?= $x_liter_checked; ?>>
          Liter
         </li>
        </ul>
  
        <ul class="right">
         <li>
          Teaspoon
          <input type="radio" name="y_unit" value="teaspoon" <?= $y_teaspoon_checked; ?>>
         </li>
   
         <li>
          Tablespoon
          <input type="radio" name="y_unit" value="tablespoon" <?= $y_tablespoon_checked; ?>>
         </li>
   
         <li>
          Cup
          <input type="radio" name="y_unit" value="cup" <?= $y_cup_checked; ?>>
         </li>
   
         <li>
          Fluid Ounce (US)
          <input type="radio" name="y_unit" value="fl_oz_us" <?= $y_fl_oz_us_checked; ?>>
         </li>
   
         <li>
          Fluid Ounce (UK)
          <input type="radio" name="y_unit" value="fl_oz_uk" <?= $y_fl_oz_uk_checked; ?>>
         </li>
   
         <li>
          Pint (US)
          <input type="radio" name="y_unit" value="pint_us" <?= $y_pint_us_checked; ?>>
         </li>
   
         <li>
          Pint (UK)
          <input type="radio" name="y_unit" value="pint_uk" <?= $y_pint_uk_checked; ?>>
         </li>
   
         <li>
          Quart (US)
          <input type="radio" name="y_unit" value="quart_us" <?= $y_quart_us_checked; ?>>
         </li>
   
         <li>
          Quart (UK)
          <input type="radio" name="y_unit" value="quart_uk" <?= $y_quart_uk_checked; ?>>
         </li>
  
         <li>
          Gallon (US)
          <input type="radio" name="y_unit" value="gallon_us" <?= $y_gallon_us_checked; ?>>
         </li>
   
         <li>
          Gallon (UK)
          <input type="radio" name="y_unit" value="gallon_uk" <?= $y_gallon_uk_checked; ?>>
         </li>
   
         <li>
          Milliliter
          <input type="radio" name="y_unit" value="milliliter" <?= $y_milliliter_checked; ?>>
         </li>
   
         <li>
          Liter
          <input type="radio" name="y_unit" value="liter" <?= $y_liter_checked; ?>>
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