<?php
  function checkEligibilityToVote()
 {
    $age = 23;
      $name = "Van";
      if($age >= 18)
      {
          echo "$name You are eligible to vote";
      }
      else
      {
         echo "$name You are not eligible to vote";
      }
 }
//  checkEligibilityToVote();
 
// grading
  function grading()
  {
    $marks = 86r546;
    if($marks >=80)
      {$grade = "A (Plain)";}
    else if($marks >=75)
       {$grade ="A (Minus)";}
    else if($marks >=70)
       {$grade ="B (Plus)";}
    else if($marks >=65)
       {$grade ="B (Plain)";}
    else if($marks >=60)
       {$grade ="B (Minus)";}
    else if($marks >=50)
       {$grade ="C";}
    else{
        $grade = "fail";
    }
   echo "Your grade is $grade";
 };
grading();
?>