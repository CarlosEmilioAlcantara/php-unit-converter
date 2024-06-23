<?php
    // Import the php back-end 
    include('../mains/currency-main.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Currency - PHP Unit Converter</title>
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
  
    <h2>Currency</h2>
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
          <input type="radio" name="x_unit" value="us_dollar" <?= $x_us_dollar_checked; ?>>
          American Dollar
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="aus_dollar" <?= $x_aus_dollar_checked; ?>>
          Australian Dollar
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="uk_pound" <?= $x_uk_pound_checked; ?>>
          British Pound
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="br_real" <?= $x_br_real_checked; ?>>
          Brazilian Real
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="ca_dollar" <?= $x_ca_dollar_checked; ?>>
          Canadian Dollar
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="cn_yuan" <?= $x_cn_yuan_checked; ?>>
          Chinese Yuan
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="cz_koruna" <?= $x_cz_koruna_checked; ?>>
          Czech Koruna
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="dk_krone" <?= $x_dk_krone_checked; ?>>
          Danish Krone
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="euro" <?= $x_euro_checked; ?>>
          Euro
         </li>
  
         <li>
          <input type="radio" name="x_unit" value="hk_dollar" <?= $x_hk_dollar_checked; ?>>
          Hong Kong Dollar
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="hu_forint" <?= $x_hu_forint_checked; ?>>
          Hungarian Forint
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="is_krona" <?= $x_is_krona_checked; ?>>
          Icelandic Krona
         </li>
   
         <li>
          <input type="radio" name="x_unit" value="in_rupee" <?= $x_in_rupee_checked; ?>>
          Indian Rupee
         </li>

         <li>
          <input type="radio" name="x_unit" value="id_rupiah" <?= $x_id_rupiah_checked; ?>>
          Indonesian Rupiah
         </li>

         <li>
          <input type="radio" name="x_unit" value="il_shekel" <?= $x_il_shekel_checked; ?>>
          Israeli Shekel
         </li>

         <li>
          <input type="radio" name="x_unit" value="jp_yen" <?= $x_jp_yen_checked; ?>>
          Japenese Yen
         </li>

         <li>
          <input type="radio" name="x_unit" value="kr_won" <?= $x_kr_won_checked; ?>>
          Korean Won
         </li>

         <li>
          <input type="radio" name="x_unit" value="my_ringgit" <?= $x_my_ringgit_checked; ?>>
          Malaysian Ringgit
         </li>

         <li>
          <input type="radio" name="x_unit" value="mx_peso" <?= $x_mx_peso_checked; ?>>
          Mexican Peso
         </li>

         <li>
          <input type="radio" name="x_unit" value="nz_dollar" <?= $x_nz_dollar_checked; ?>>
          New Zealand Dollar
         </li>

         <li>
          <input type="radio" name="x_unit" value="no_krone" <?= $x_no_krone_checked; ?>>
          Norwegian Krone
         </li>

         <li>
          <input type="radio" name="x_unit" value="ph_peso" <?= $x_ph_peso_checked; ?>>
          Philippine Peso
         </li>

         <li>
          <input type="radio" name="x_unit" value="pl_zloty" <?= $x_pl_zloty_checked; ?>>
          Polish Zloty
         </li>

         <li>
          <input type="radio" name="x_unit" value="ro_leu" <?= $x_ro_leu_checked; ?>>
          Romanian Leu
         </li>

         <li>
          <input type="radio" name="x_unit" value="sg_dollar" <?= $x_sg_dollar_checked; ?>>
          Singapore Dollar
         </li>

         <li>
          <input type="radio" name="x_unit" value="za_rand" <?= $x_za_rand_checked; ?>>
          South African Rand
         </li>

         <li>
          <input type="radio" name="x_unit" value="se_krona" <?= $x_se_krona_checked; ?>>
          Swedish Krona
         </li>

         <li>
          <input type="radio" name="x_unit" value="ch_franc" <?= $x_ch_franc_checked; ?>>
          Swiss Franc
         </li>

         <li>
          <input type="radio" name="x_unit" value="th_baht" <?= $x_th_baht_checked; ?>>
          Thai Baht
         </li>

         <li>
          <input type="radio" name="x_unit" value="tr_lira" <?= $x_tr_lira_checked; ?>>
          Turkish Lira
         </li>
        </ul>
  
        <ul class="right">
         <li>
          American Dollar
          <input type="radio" name="y_unit" value="us_dollar" <?= $y_us_dollar_checked; ?>>
         </li>
   
         <li>
          Australian Dollar
          <input type="radio" name="y_unit" value="aus_dollar" <?= $y_aus_dollar_checked; ?>>
         </li>
   
         <li>
          British Pound
          <input type="radio" name="y_unit" value="uk_pound" <?= $y_uk_pound_checked; ?>>
         </li>
   
         <li>
          Brazilian Real
          <input type="radio" name="y_unit" value="br_real" <?= $y_br_real_checked; ?>>
         </li>
   
         <li>
          Canadian Dollar
          <input type="radio" name="y_unit" value="ca_dollar" <?= $y_ca_dollar_checked; ?>>
         </li>
   
         <li>
          Chinese Yuan
          <input type="radio" name="y_unit" value="cn_yuan" <?= $y_cn_yuan_checked; ?>>
         </li>
   
         <li>
          Czech Koruna
          <input type="radio" name="y_unit" value="cz_koruna" <?= $y_cz_koruna_checked; ?>>
         </li>
   
         <li>
          Danish Krone
          <input type="radio" name="y_unit" value="dk_krone" <?= $y_dk_krone_checked; ?>>
         </li>
   
         <li>
          Euro
          <input type="radio" name="y_unit" value="euro" <?= $y_euro_checked; ?>>
         </li>
  
         <li>
          Hong Kong Dollar
          <input type="radio" name="y_unit" value="hk_dollar" <?= $y_hk_dollar_checked; ?>>
         </li>
   
         <li>
          Hungarian Forint
          <input type="radio" name="y_unit" value="hu_forint" <?= $y_hu_forint_checked; ?>>
         </li>
   
         <li>
          Icelandic Krona
          <input type="radio" name="y_unit" value="is_krona" <?= $y_is_krona_checked; ?>>
         </li>
   
         <li>
          Indian Rupee
          <input type="radio" name="y_unit" value="in_rupee" <?= $y_in_rupee_checked; ?>>
         </li>

         <li>
          Indonesian Rupiah
          <input type="radio" name="y_unit" value="id_rupiah" <?= $y_id_rupiah_checked; ?>>
         </li>

         <li>
          Israeli Shekel
          <input type="radio" name="y_unit" value="il_shekel" <?= $y_il_shekel_checked; ?>>
         </li>

         <li>
          Japenese Yen
          <input type="radio" name="y_unit" value="jp_yen" <?= $y_jp_yen_checked; ?>>
         </li>

         <li>
          Korean Won
          <input type="radio" name="y_unit" value="kr_won" <?= $y_kr_won_checked; ?>>
         </li>

         <li>
          Malaysian Ringgit
          <input type="radio" name="y_unit" value="my_ringgit" <?= $y_my_ringgit_checked; ?>>
         </li>

         <li>
          Mexican Peso
          <input type="radio" name="y_unit" value="mx_peso" <?= $y_mx_peso_checked; ?>>
         </li>

         <li>
          New Zealand Dollar
          <input type="radio" name="y_unit" value="nz_dollar" <?= $y_nz_dollar_checked; ?>>
         </li>

         <li>
          Norwegian Krone
          <input type="radio" name="y_unit" value="no_krone" <?= $y_no_krone_checked; ?>>
         </li>

         <li>
          Philippine Peso
          <input type="radio" name="y_unit" value="ph_peso" <?= $y_ph_peso_checked; ?>>
         </li>

         <li>
          Polish Zloty
          <input type="radio" name="y_unit" value="pl_zloty" <?= $y_pl_zloty_checked; ?>>
         </li>

         <li>
          Romanian Leu
          <input type="radio" name="y_unit" value="ro_leu" <?= $y_ro_leu_checked; ?>>
         </li>

         <li>
          Singapore Dollar
          <input type="radio" name="y_unit" value="sg_dollar" <?= $y_sg_dollar_checked; ?>>
         </li>

         <li>
          South African Rand
          <input type="radio" name="y_unit" value="za_rand" <?= $y_za_rand_checked; ?>>
         </li>

         <li>
          Swedish Krona
          <input type="radio" name="y_unit" value="se_krona" <?= $y_se_krona_checked; ?>>
         </li>

         <li>
          Swiss Franc
          <input type="radio" name="y_unit" value="ch_franc" <?= $y_ch_franc_checked; ?>>
         </li>

         <li>
          Thai Baht
          <input type="radio" name="y_unit" value="th_baht" <?= $y_th_baht_checked; ?>>
         </li>

         <li>
          Turkish Lira
          <input type="radio" name="y_unit" value="tr_lira" <?= $y_tr_lira_checked; ?>>
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