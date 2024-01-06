<?php
    $linha=5;
    $array[$linha][$linha] = array();
    
    for ($i=1; $i <= $linha+1; $i++) { 
        
        for ($j=1; $j < $i+1; $j++) { 
            if ($j==1 || $j==($i)){
                $array[$i][$j] = $i/$i." ";
            } else{
                $array[$i][$j] = ($array[$i-1][$j] + $array[$i-1][$j-1])." ";
            }
        }
    
    }

    for ($i=1; $i <= $linha+1; $i++) { 
        
        for ($j=1; $j < $i+1; $j++) { 
            echo $array[$i][$j];
        }
        echo "\n";
    }

?>