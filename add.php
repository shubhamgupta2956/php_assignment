<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QuizTime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <form method="POST" action="php/add1.php">
            <p>
                <label>Enter Question Number</label>
                <input type="number" name="question_number">
            </p>
            <p>
                <label>Enter Question Text</label>
                <input type="text" name="question_text">
            </p>
            <p>
                <label>Option 1</label>
                <input type="text" name="option1">
            </p>
            <p>
                <label>Option 2</label>
                <input type="text" name="option2">
            </p>
            <p>
                <label>Option 3</label>
                <input type="text" name="option3">
            </p>
            <p>
                <label>Option 4</label>
                <input type="text" name="option4">
            </p>
            <p>
                <label>Correct Option</label>
                <input type="number" name="correct_option">
            </p>
            <p>
                <label>Points</label>
                <input type="number" name="points">
            </p>
            <p>
            <input type="submit" name ="submit" value = "submit">
            </p>
        </form>

    
    </div>
</body>
</html>