<?php 

    function addition($n1, $n2){
        if( (is_int($n1)) || (is_float($n1)) ){
            if( (is_int($n2)) || (is_float($n2)) ){
                return $n1 + $n2;
            }
        }
        else if( (is_string($n1)) && (is_string($n2)) ){
            return $n1." ".$n2;
        }
        else{
            return "NOT POSSIBLE";
        }
        
    }

    echo addition(2,5);
    echo "<br>";
    echo addition("jhalak","surve");
    

    



?>