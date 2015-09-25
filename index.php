<?php

function Greetings($hour){
    $hour=(int)$hour;
    $greeting = "";
    if ($hour<12){
        $greeting="Good Morning";
    }
    elseif ($hour>=11) {
        $greeting="Good Afternoon";
    }
    else {
        $greeting="Good Night";
    }
    
    return $greeting;
    
    
            
      
}

print (Greetings(12));

?>
