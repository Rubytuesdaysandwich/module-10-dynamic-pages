<?php
 require_once('../private/initialize.php');//file path to initialize.php
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   
    <body> 
        <?php include('../private/shared/links_header/links_header.php');//links header path?>
        <?php $page= get_id(); ?>
        <?php echo $page;?>
        <?php include('../private/shared/links_footer/links_footer.php');//links footer path?>
        
    </body>
</html>
