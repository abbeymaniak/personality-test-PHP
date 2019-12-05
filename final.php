<?php session_start(); ?>
<!-- <?php if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality Test</title>
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
        <h2>You're Done</h2>
        <p>Congrats! You have completed the test</p>
        <p> Final score: <?php echo $_SESSION['score']; ?></p>
        <?php unset($_SESSION['score']);?>
        <a href="question.php?n=1" class="start">Take Again</a>
        
        
        
    </main>
    <footer>
        <div class="container">
            
            Copyright &copy; 2019, LACE Personality Test
        </div>
    </footer>
    
</body>
</html>