<?php
function powerOfTwo($num){
    if($num == 1){
        return "True, it is power of two";
    }else if(($num % 2) != 0 || $num === 0){
        return "False, it is not power of two";
    }else return "True is power of two";
}
echo powerOfTwo(4), "\n";
echo powerOfTwo(3), "\n";
echo powerOfTwo(8), "\n";
echo powerOfTwo(7), "\n";
?>