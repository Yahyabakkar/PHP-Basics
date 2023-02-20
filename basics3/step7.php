<?php
function sentenceReverse($sentence){
    for ($i = strlen($sentence); $i >= 0; $i--) {
        echo "$sentence[$i]";
    }
    echo "\n";
}
echo sentenceReverse("Hello world");
?>