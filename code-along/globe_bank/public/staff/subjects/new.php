<?php require_once('../../../private/initialize.php');//!Header data requires there to be no spaces
//!white space like this is ok
$test =$_GET[$test]?? '';

if($test =='404'){
    error_404();
}elseif($test == '500'){
    error_500();
}
elseif($test=='redirect'){
header("Location:".url_for('staff/subjects/index.php'));
exit;
}
else {
    echo 'No error';
}
?>