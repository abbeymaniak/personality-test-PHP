<?php include 'database.php' ?>
<?php session_start(); ?>
<?php
//Set Question number
$number = (int) $_GET['n'];

/*
* Get total questions
*/
    
    $query = "SELECT * FROM question";
    
    //Get result
    
    $result = $mysqli->query($query) or die();
    $total = $result->num_rows;



/*
 * Get Question
 */
$query = "SELECT * FROM `question`
          WHERE question_id = $number";
            
//Get Result
$result = $mysqli->query($query) or die();

$question = $result->fetch_assoc();

/*
 * Get Choices
 */
$query = "SELECT * FROM `picks`
            WHERE question_id = $number";
            
//Get Results
$picks = $mysqli->query($query) or die();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>Personality Test</h1>
            
        </div>
    </header>
    <main>
       <div class="container">
        <h2> Test you Personality knowledge</h2>
        <div class="current">Question <?php echo $question['question_id']; ?> of <?php echo $total; ?> </div>
        <p class="question">
            <?php echo $question['questions']; ?>
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
                <?php while($row = $picks->fetch_assoc()) : ?>
                 <li><input name="picks" type="radio" value="<?php echo $row['selection']; ?>" /><?php echo $row['option_qst']; ?></li>
                <?php endwhile; ?>
                          
            </ul>
            <input type="submit" name="submit" value="Submit" />
            <input type="hidden" name="number" value="<?php echo $number; ?>" />
        </form>
       </div> 
        
        
      
        
    </main>
    <footer>
        <div class="container">
            
            Copyright &copy; 2019, Lace Personality Test
        </div>
    </footer>
    
</body>
</html>