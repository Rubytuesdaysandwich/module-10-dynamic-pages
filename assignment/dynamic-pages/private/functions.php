<?php
function url_for($script_path){
    //add the leading '/' if not present
    if($script_path[0]!='/'){
      $script_path = "/" . $script_path;
  
    }
  return WWW_ROOT . $script_path;
  }
  
  function redirect_to($location){
    header("Location:". $location);
  exit;
  }

function get_id(){

 $page =$_GET['page']??'0';// php 7.0 ?? gives it a default if nothing is given
 return $page;//sending the variable outside the function get_id can now be accessed outside of function
}

function get_title(){
 $page = get_id();//pulling in get_id function and the $page variable to get the page id
    switch($page){//switch statement using the $page to go through the page id based on the page id it is assigned a title name
        case 1://page 1
        echo "Welcome";
        break;
        case 2://page 2
        echo "Hobbies";
        break;
        case 3://page 3
        echo "About";
        break;
        case 4://page 4
        echo "vacation";
        break;
        case 5://page 5
        echo "Movies";
        break;                                     
    }
}

function display_content($page){
if($page==1){//page 1 welcome page
    ?>
    <h1>Welcome</h1><!--Header for welcome page-->
    <div class="welcome-container"><!--container for welcome content section-->
        <p>Hello, welcome to the page of Rueben Durfee's php assignment I hope you enjoy your stay. </p><!--paragraph text-->
    </div><!--end container for content section-->
    <?php
}
elseif($page==2){//page 2 Hobbies page
    ?>
    <h1>Hobbies</h1><!--Header for hobbies page-->
    <div class="hobbies-container"><!--container for hobbies content section-->
        <p>Some of my favorite hobbies consist of outdoor activities like hiking, or swimming.</p><!--paragraph text-->
    </div><!--end container for content section-->
    <?php
}
elseif($page==3){//page 3 About page
    ?>
    <h1>About</h1><!--Header for about page-->
    <div class="about-container"><!--container for about content section-->
    <p>Hello I am Rueben Durfee a future web developer. I am attending BridgerLand Technical College in logan utah. I am originally from NewPlymouth Idaho where I grew up farming and raising animals
        I am also part of The Church Of Jesus Christ Of Later Day Saints.   </p><!--paragraph text-->
    </div><!--end container for content section-->
    <?php
}
elseif($page==4){//page 4 Vacation page
    ?>
    <h1>vacation</h1><!--Header for vacation page-->
    <div class="vacation-container"><!--container for vacation content section-->
        <p>My favorite vacation spot I have been to so far was petersburg virginia. It is a very green and beautiful place filled with history. I am looking forward to going to the Philippines in April of next year to possibly go island hopping with my girlfriend. </p><!--paragraph text-->
    </div><!--end container for content section-->
    <?php
}
elseif($page==5){//page 5 redirect to favorite movie on imdb.
        redirect_to('https://www.imdb.com/title/tt1861312/?ref_=tt_sims_tt_i_9');//redirect the user to IMDB.COM
      
      }
}



?>