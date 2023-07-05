<?php
  $snacks=false;
  $dinner=false;

  if($snacks && $dinner){
    echo "You have snacks and dinner";
  }
  else if($snacks==false && $dinner){
    echo "You have dinner";
  }

  else if($dinner==false && $snacks){
    echo "You have snacks";
  }
  else{
    echo "You're broke";
  }

?>