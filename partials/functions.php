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

  // controllo se la password contiene almeno un char per tipo
  if (similar_text($arrayPasswordElement[0],$password) && 
      similar_text($arrayPasswordElement[1],$password) && 
      similar_text($arrayPasswordElement[2],$password) && 
      similar_text($arrayPasswordElement[3],$password) ) {
    return $password;
  }else{
    return genPassword($lenPass);
  }

};

?>