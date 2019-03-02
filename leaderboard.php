<div id="board">
    <table cellspacing="0" cellpadding="2" width="620"><tbody>
        <thead>
            <tr>
                
                <td>User</td>             
                <td>Score</td>
            </tr>
        </thead>
        <tbody>
            <?php

$conn = mysqli_connect("localhost", "root", "Shubham@00", "quiz");
if (!$conn) {
                    die(mysql_error());
                }
                $result = mysqli_query($conn,"SELECT user,score FROM user ORDER BY score DESC");
                while($row = mysqli_fetch_array($result)) {
                $points = $row['score'];
                $player_id = $row['user'];
            ?>

                <tr>
                    
                    <td><?php echo $player_id;?></td>
                    <td><?php echo $points;?></td>
                </tr>
            <?php
                }
                
            ?>
        </tbody>
    </table>
</div>