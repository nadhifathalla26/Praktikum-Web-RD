<?php

function sorting(){
    echo '<h3>Program Pengurutan 10 Kata</h3>';

    $listArray = array('larine','aduh','qifuat','toda','anevi','samid','kifuat','nadhif','athalla','pemweb');
    
    sort($listArray);

    foreach($listArray as $sortedData){
        echo $sortedData;
        echo '<br>';
    }
}

sorting();

?>