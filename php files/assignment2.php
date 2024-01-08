<?php
 function greeting() {
    echo "How are you?  . <br />";
 }
 greeting();

 $greeting="How are you";
 echo $greeting;
 $firstName="John?";
 echo $firstName;

 function concatenateVariableAndConstant() {
    define("AGE",17);
    $age="17";
   
    echo $age . AGE;
}
concatenateVariableAndConstant();

?>