<!--
 * @Author: Zazu
 * @Date:   2018-09-28 17:57:05
 * @Last Modified by:   Zazu
 * @Last Modified time: 2018-10-13 18:43:07
-->

<?php 

session_start();

include_once('/var/www/html/php/config.php') 

?>


<!DOCTYPE html>
<html>
<head>
   <title>World Wide Weebs: Home</title>
   <meta charset="UTF-8"> 

   <?php include_once('/var/www/html/php/imports.php'); ?>

</head>
<body>
   <?php  
      $currentPage = "index";  
/*      include_once('/var/www/html/php/navbar.php'); */
   ?>

   <div class="container">
      <div class="row">
         <div class="col">
            <img src="/img/404.png" alt="" class="w-100">
         </div>
      </div>
   </div>
</body>
</html>
