<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php

$user_id = $_SESSION['user_id'];

//check to see i score is set_error_handler

// if(!isset($_SESSION['score'])){
//     $_SESSION['score'] = 0;
    
// }

if($_POST) {
    $number = $_POST['number'];
    $selected_choice = $_POST['picks'];
    $next = $number+1;


       var_dump($number);
       var_dump($selected_choice);
    
    /*
     * Get total questions
     */
    
    $query = "SELECT * FROM `question`";
    
    //Get result
    
    $result = $mysqli->query($query) or die();
    $total = $result->num_rows;



    
    
    /*
     * Get correct choice
     */
    
    $query = "INSERT INTO results (user_id,question_id,picks) VALUES($user_id,$number,$selected_choice)";
// Get Result
$result = $mysqli->query($query) or die();

//Get row

// $row = $result->fetch_assoc();

//Set correct choice

// $correct_choice = $row['answer_id'];

// //Compare
// if($correct_choice == $selected_choice) {
    
// // Answer is correct
// // $_SESSION['score']++;
    
// }


//check if last question

if ($number == $total){
    header("Location: final.php");
    exit();
    
}else{
  header("Location: question.php?n=".$next);  
    
}


}

