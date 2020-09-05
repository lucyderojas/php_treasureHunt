<?php
  
function pickMushrooms(){
	// Write your code here:
  global $location, $has_mushrooms;



// if in the woods:
  if ($location ==="woods") {
    echo "You've picked some mushrooms.\n";
    $has_mushrooms = TRUE;
  }
  else {
    echo "There aren't any mushrooms to pick!\n";
  }; // end of in the woods condition
  
  
  
  
  
  
}; // end of pickmushrooms function
