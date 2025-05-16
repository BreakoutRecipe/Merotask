<?php
function dd($value){
    ob_start();
    var_dump($value);
    $value=ob_get_clean();
    echo "<pre>".$value."</pre>";
    die();
}
?>