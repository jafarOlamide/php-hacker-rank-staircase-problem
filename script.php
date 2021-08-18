$n = 10;
function staircase($n) {
    for ($i = 0; $i< $n ; $i++){
        $string = "";
        
        for ($j = 0; $j< $n-$i-1; $j++){
            $string = $string . " "; 
        }
        
        for ($k = 0; $k< $i+1; $k++){
            $string = $string . "#";
        }
 
        echo $string . "\n";
    } 
}
