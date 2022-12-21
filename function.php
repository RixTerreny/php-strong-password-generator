<?php
function passwordGen($Lu,$le,$nu,$si,$ripe){
    if ($Lu<=4) {
        return;
    }
    else{
        $special = true;
        $numeri = true;
        $password ="";
        if ($le==1){
            $password =  chr(rand(65,90));
        }else{
            $Lu++;
        }
    
        if ($nu=="" && $numeri==true) {
            $Lu++;
            $Lu++;
            $numeri = false;
        }
    
        if ($si=="" && $special == true) {
            $Lu++;
            $special = false;
        }
    
        $allLetter = [];
        for ($i=0; $i < $Lu-4; $i++) {
            $newLetter = chr(rand(97,122));
            if ($ripe==0) {
                if(in_array($newLetter, $allLetter)==1){
                    $i--;
                }else{
                    array_push($allLetter,$newLetter);
                    $password .= $newLetter;
                };
            }else{
                $password .= chr(rand(97,122));
            }
        }
    
        if ($special==true) {
            $password .=  chr(rand(35,45));
        }
    
        if ($numeri==true) {
            $password .= rand(10, 99); 
        }
    
        return $password;
    }
};