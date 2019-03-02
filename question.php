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
        <p class="qusetion"><?php ?></p>
        <?php
        $conn = mysqli_connect("localhost", "root", "Shubham@00", "quiz");
    $username=$_SESSION['username'];

        $user=$conn->query("SELECT * from user where user='".$username."'");
$info=mysqli_fetch_assoc($user);
echo "Your Points : ".$user['score']."<br>";
 $ask="SELECT * FROM results";
	$res=$conn->query($ask);
	$result=mysqli_fetch_assoc($res);
	$query="SELECT * FROM Questions";
	$result1=$conn->query($query);
	$count=0;
while ($row=mysqli_fetch_assoc($result1)) {
	$i=$row['question_number'];
	$ask="SELECT * FROM result WHERE user='".$username."' AND question_number='".$question_number;
	$res=$conn->query($ask);
	$result=mysqli_fetch_assoc($res);
	if ($result['status']=='0') {
	echo '<form method="POST" action="question1.php">';
	echo 'Question'.$question_number.'';
	echo 'Points'.$row['points'].'<br>';
    echo $row['text']."<br>";
    $id=$row['id where question_number='.$question_number];
	echo "Option a)<input type='radio' name='option' value='a'>".$row['text where question_number='.$question_number.'and id ='.$id]."<br>";
	echo "Option b)<input type='radio' name='option' value='b'>".$row['text where question_number='.$question_number.'and id ='.$id+1]."<br>";
	echo "Option c)<input type='radio' name='option' value='c'>".$row['text where question_number='.$question_number.'and id ='.$id+2]."<br>";
	echo "Option d)<input type='radio' name='option' value='d'>".$row['text where question_number='.$question_number.'and id ='.$id+3]."<br>";
	echo "<input type='submit' value='answer'>";
	echo '</form><br><br>';
	$count++;
}
}
if ($count===0) {
	echo 'You have attempted all available questions';
}

else{
	header("Location: index.php");
}
?>
        <a href="leaderboard.php">Leader Board</a>
        <a href="add.php">Add Questions</a>
    
    </div>
</body>
</html>