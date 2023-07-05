<?php
  $grade="Pizza";
  switch($grade){
    case "A":
      echo "You did excellent";
      break;

    case "B":
      echo "You did good";
      break; 
      
    case "C":
      echo "You did alright";
      break;  
    
    case "D":
      echo "You did poorly";
      break;  
    
    case "F":
      echo "You failed";
      break;  

    default:
      echo "Hmm...{$grade} is not valid";

  }

  echo "<br>";
  $date = date("l"); //<-this gives the date of the user's date
  echo "{$date} <br>";

  $date="Tuesday";

  switch($date){
    case "Monday":
      echo "I hate Mondays";
      break;
    
    case "Tuesday":
      echo "I hate Tuesdays";
      break;
      
    case "Wednesday":
      echo "I hate Wednesdays";
      break;
      
    case "Thursday":
      echo "I hate Thursdays";
      break;
      
    case "Friday":
      echo "I hate Fridays";
      break;
    
    case "Saturday":
      echo "I hate Saturdays";  
      break;

    case "Sunday":
      echo "I hate Sundays";  
      break; 

  }
    
?>