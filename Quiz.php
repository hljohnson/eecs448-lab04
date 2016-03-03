<?php
//access the global array called $_POST to get values from the text fields
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];

$correct = 0;
// Enter statement if submit is clicked
if(isset($_POST['submit'])) {

  // Check if questions 1-5 are correct
  // If a question is correct, add to correct score
  if($q1 == "Cheyenne") {$correct++;}
  if($q2 == "Brokeback Mountain") {$correct++;}
  if($q3 == "Laramie") {$correct++;}
  if($q4 == "Skyler Snodgrass") {$correct++;}
  if($q5 == "Yellowstone") {$correct++;}

  // Question 1
  echo "Question 1: What is the capital of Wyoming?"."<br>";
  echo "You answered: " .$q1. "<br>";
  echo "Correct Answer: Cheyenne"."<br>";
  echo "<br>";
  // Question 2
  echo "Question 2: What critically acclaimed film is based in Wyoming?"."<br>";
  echo "You answered: " .$q2. "<br>";
  echo "Correct Answer: Brokeback Mountain"."<br>";
  echo "<br>";
  // Question 3
  echo "Question 3: Which Wyoming city is the University of Wyoming - the state's
  only four-year university - located in?"."<br>";
  echo "You answered: " .$q3. "<br>";
  echo "Correct Answer: Laramie"."<br>";
  echo "<br>";
  // Question 4
  echo "Question 4: Which University of Wyoming Women's Basketball player is #24?"."<br>";
  echo "You answered: " .$q4. "<br>";
  echo "Correct Answer: Skyler Snodgrass"."<br>";
  echo "<br>";
  // Question 5
  echo "Question 5: America's first and largest national park is located in Wyoming (WOW!)
  Which national park is this?"."<br>";
  echo "You answered: " .$q5. "<br>";
  echo "Correct Answer: Yellowstone"."<br>";
  echo "<br>";

  // Display score out of 5
  echo "Score: " .$correct. "/5";
  echo "<br>";
  // Display score in a percent
  echo "Percentage: ".($correct/5)*100;
  echo "%";

}

?>
