<?php

$conn = mysqli_connect("localhost", "root", "Shubham@00", "quiz");
$result = mysqli_query($conn,"SELECT * FROM user WHERE user='admin' and pass= 'admin'");    

    $row = mysqli_fetch_array($result);
    if ($row['user'] == $_SESSION['username'] && $row['pass'] == $_SESSION['password'] )
    {
if (isset($_POST['option'])) {
$username=$_SESSION['username'];
$option=$_POST['option'];
$points=$_POST['points'];
$user=$conn->query("SELECT * from user where username='".$username."'");
$info=mysqli_fetch_assoc($user);
$a="SELECT * FROM result WHERE username='".$username."";
	$res=$conn->query($a);
	$change=mysqli_fetch_assoc($res);
$ques="SELECT * from questions where question_number='".$question_number."'";
$result=$conn->query($ques);
$result1=mysqli_fetch_assoc($result);
if ($option==$result1['status']) {
	
	$query="UPDATE results SET status=1 where user='".$username."' AND question_numbe='".$question_number."'";
	$points=$questions['points']+$result1['points'];
	$query1="UPDATE Users SET points =".$points." where username='".$username."'";
	$conn->query($query1);
	$conn->query($query);
}else{
$q="UPDATE results SET status='answered-incorrect' where userq='".$username.$num."'";$conn->query($q);
}
header("Location: solve.php");
}else{
	header("Location: solve.php");
}}
?>