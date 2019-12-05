<?php include 'database.php' ?>
<?php
/*Get total number of questions
 *
 */

 $query = "SELECT * FROM question";
 //Get results
 $results =$mysqli->query($query) ;
 $total = $results->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERSONALITY TEST</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>PERSONALITY TEST</h1>
            
        </div>
    </header>
    <main>
       <div class="container">
        <h2> Test you Personality</h2>
        <p>This is a multiple choice quiz to test your responses and tell you where you belong in the Personality Chart</p>
        <ul>
            <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
            <li><strong>Type: </strong>Muliple Choice</li>
            <li><strong>Estimated Time: </strong><?php echo $total * .5; ?>Minute(s)</li>
        </ul>
        <a href="question.php?n=1" class="start">Start Quiz</a>
       </div> 
        
        
        
        
    </main>
    <footer>
        <div class="container">
            
            Copyright &copy; 2019, Personality Test
        </div>
    </footer>
    
</body>
</html>