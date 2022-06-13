<?php
function get_id(){

 $page =$_GET['page']??'0';// php 7.0 ?? gives it a default if nothing is given
 return $page;//sending the variable outside the function get_id can now be accessed outside of function
}

function get_title(){
 $page = get_id();//pulling in get_id function and the $page variable to get the page id
    switch($page){//switch statement using the $page to go through the page id based on the page id it is assigned a title name
        case 1:
        echo "Home";
        break;
        case 2:
        echo "portfolio";
        break;
        case 3:
        echo "gallery";
        break;
        case 4:
        echo "skills";
        break;
        case 5:
        echo "achievements";
        break;                                     
    }
}



?>