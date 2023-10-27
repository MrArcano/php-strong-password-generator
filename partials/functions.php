<?php 


function checkNumChar($number){
  if($number >= 8 && $number <= 32){
    return true;
  }else{
    return false;
  }
};

// Function Generator Password
function genPassword($lenPass){
  $arrayPasswordElement = [
    "abcdefghijklmnopqrstuvwxyz",
    "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
    "0123456789",
    "~!@#$%^&*()_-+={|:;,.?/",
    ];
  
  $password = "";

  for ($i=0; $i < $lenPass; $i++) {
    // scelgo da che stringa dell'array estrarre il carattere
    $typeSelect = rand(0,3);
    // scelgo l'elemento nella stringa
    $elementSelect = rand(0,strlen($arrayPasswordElement[$typeSelect]) - 1);
    $char = $arrayPasswordElement[$typeSelect][$elementSelect];
    $password .= $char;
  }

  return $password;
};

?>