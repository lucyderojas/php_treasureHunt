<?php
// Move the cupboard
  
function moveCupboard(){
    global $is_hungry, $wearing_contacts, $wearing_glasses, $needs_to_pee, $location, $moved_cupboard;

	// Write your code here:

$ready_to_work = FALSE;



// in kitchen condition:
if ($location === "kitchen") {



// ready condition:
if (!$is_hungry && $wearing_contacts && !$wearing_glasses && !$needs_to_pee) {
    $ready_to_work = TRUE;




    // moved cupboard condition:
    if ($moved_cupboard) {
      echo "You've already moved the cupboard!\n";

    }
    else {
      echo "You move the cupboard aside. You have revealed a safe crudely fit into the wall behind where the cupboard used to be.\n";
      $moved_cupboard = TRUE;


    }//end of moved cupboard condition





}

else {
  echo "You're not ready to work! You need to be properly fed, have an empty bladder, and have corrected vision (without dealing with those pesky glasses). Without these things, there's no point in even trying to move the cupboard.\n";

}; // end of ready condition





// else of in kitchen condition:
} 
else {
  echo "You don't see a cupboard here!\n";

}; // end of in kitchen condition wrapping ready condition



  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
}
