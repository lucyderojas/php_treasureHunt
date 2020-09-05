<?php
  
function pee(){
	// Write your code here:

  global $location, $needs_to_pee;


// needs to pee:
  if ($location === "woods" || $location === "bathroom") {
    echo "You relieve yourself.\n";
    $needs_to_pee = FALSE;
    }
    else {
      echo "Are you crazy? You can't pee here!\n";
    }; // end of needs to pee condition
  
  
  
  
  
  
}; //end of pee function 
