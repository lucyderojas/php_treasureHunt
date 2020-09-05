<?php
function eatSoup(){
	// Write your code here:
  
  global $has_soup, $is_hungry;


// eating soup:
  if ($has_soup) {
    echo "You have eaten the soup!\n";
    $has_soup = FALSE;
    $is_hungry = FALSE;
    }

  else {
    echo "You don't have any cooked food to eat!\n";
  }; //end of eating condition


  
  
  
  
}; //end of function eating soup
