<?php

    function unknown($input){
        $tmp = "";
        $output = "";
        for($i = 0; $i < strlen($input); $i++){
            if($input == " "){
                $output = " ".$tmp.$output;
                $tmp = "";
                continue;
            }
            $tmp .= $input;
        }
        $output = " - ".$tmp.$output;
        return $output;
    }

echo unknown("ler urw rew ejwhk wij");

?>