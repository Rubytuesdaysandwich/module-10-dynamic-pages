<?php
function get_id(){

 $page =$_GET['page']??'0';// php 7.0 ?? gives it a default if nothing is given
 return $page;//sending the variable outside the function get_id can now be accessed outside of function
}

function get_title(){
 $page = get_id();//pulling in get_id function and the $page variable to get the page id
    switch($page){//switch statement using the $page to go through the page id based on the page id it is assigned a title name
        case 1://page 1
        echo "Home";
        break;
        case 2://page 2
        echo "portfolio";
        break;
        case 3://page 3
        echo "gallery";
        break;
        case 4://page 4
        echo "skills";
        break;
        case 5://page 5
        echo "achievements";
        break;                                     
    }
}

function display_content($page){
//$page = get_id();//pulling in the page id to determine what should be shown to the user
if($page==1){
    ?>
    <h1>Welcome</h1>
    <p>Hello, welcome to our page enjoy your stay </p>
    <?php
}
elseif($page==2){
    echo"hi";
}
elseif($page==3){
    echo " what ";
}
elseif($page==4){
echo "sit";
}
elseif($page==5){
echo "where";
}




}


?>