<?php require_once('../../../private/initialize.php');//!Header data requires there to be no spaces

$test =$_GET[$test]?? '';

if($test =='404'){
    error_404();
}elseif($test == '500'){
    error_500();
}else {
    echo 'No error';
}
?>