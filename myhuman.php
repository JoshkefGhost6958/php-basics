<?php 
declare(strict_type =1);

$status = "standing.....";
echo $status."\n";
$perform =readline("Set task:"); 
if($perform == "walk" ){
    brain().walk("north");
}
function brain(){
    function walk(string $direction){
        $direction= readline("in which direction should i move:");
        $to_do = readline("to do: ");
        if ($direction === "north"){
            $to_do;
            echo "going north to $to_do\n";
        }
    function feed(string $food){

    }
    }
}





?>