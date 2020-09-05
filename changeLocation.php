<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
  global $location;
  echo "Where do you want to go?\n";
  $new_location = readline(">> ");
  $new_location = strtolower($new_location);







// kitchen => bathroom:
  if ($location ==="kitchen" && $new_location === "bathroom") {
    echo "You go to: bathroom.\n";
    $location = "bathroom";
  }


//kitchen => woods:
  elseif ($location === "kitchen" && $new_location==="woods") {
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.";
    $location = $new_location;
  }


//bathroom => kitchen:
  elseif ($location === "bathroom" && $new_location === "kitchen") {
    echo "You go to: kitchen.\n";
    $location = $new_location;
  }

  elseif ($location === "woods" && $new_location === "kitchen") {
    echo "You go to: kitchen.\n";
    $location = $new_location;
  }



//woods => bathroom:
  elseif ($location==="woods" && $new_location ==="bathroom") {
    echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
  }



// bathroom => woods:

elseif ($location === "bathroom" && $new_location === "woods") {
  echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
} 



//else error message:
else {
  echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
}
// end of elseifs



// else: error message:
  
  

  
  
};//end of function












































