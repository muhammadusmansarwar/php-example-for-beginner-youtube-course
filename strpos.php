<?php
$str = "Hello world! from MUS Group Of IT";
// var_dump(strpos($str, "dsfskjdfjslk")); // outputs 6
if (strpos($str, "MUS")) {
    echo 'Match Found';
} else {
    echo 'Match Not Found';
}
?>
