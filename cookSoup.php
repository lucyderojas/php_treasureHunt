<?php
  
function cookSoup(){
	// Write your code here:

  global $location, $has_mushrooms, $has_soup;


// is in kitchen and has mushrooms:
  if ($location ==="kitchen" && $has_mushrooms) {
    echo "You made some mushroom soup. Mushroom is the queen of all soups!\n";
    $has_mushrooms = FALSE;
    $has_soup = TRUE;
  }
  else {
    echo "You can't cook like this! You need something to cook AND to be in the kitchen.\n";
  }; // end of in kitchen and has mushrooms condition
  
  
  
  
  
  
  
}; //end of function
