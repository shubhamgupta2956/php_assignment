<?php
    session_start();
?>

<?php

$conn = mysqli_connect("localhost", "root", "Shubham@00", "quiz");
$result = mysqli_query($conn,"SELECT * FROM user WHERE user='admin' and pass= 'admin'");    

    $row = mysqli_fetch_array($result);
    if ($row['user'] == $_SESSION['username'] && $row['pass'] == $_SESSION['password'] )
    {

if(isset($_POST['submit']))
{
    $question_number = $_POST['question_number'] ;
    $question_text = $_POST['question_text'] ;
    $options =array();
    $options['1'] = $_POST['option1'];
    $options['2'] = $_POST['option2'];
    $options['3'] = $_POST['option3'];
    $options['4'] = $_POST['option4'];
    $correct_option = $_POST['correct_option'];
    $points = $_POST['points'];
    $query = "INSERT INTO questions (question_number,text,points)
    VALUES('$question_number,$question_text','$points')";

    

    $insert = mysqli_query($conn,$query);

    if($insert) {   
        foreach ($options as $option=>$value)
        {
            if($value!='')
            {
                if($correct_option==$option){
                    $is_correct=1;
                }
                else{
                    $is_correct=0;
                }

                $query1 = "INSERT INTO choices (question_number,is_correct,text)
                VALUES ('$question_number','$is_correct','$value')";
                $insert1 = mysqli_query($query1);


                if($insert1) {
                    continue;
                }
                else{die("error");}
            }
        }
        echo "question successfully added";   
    }
}
    }
    else{
        echo "Only admins are allowed";
    }
?>