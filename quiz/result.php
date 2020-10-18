<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>

body{
    background-image:linear-gradient(to right, rgba(255,0,0,0.8), rgba(255,20,147,0.8));;
}


</style>
<body>
<?php
echo "Score for first quiz is " .$_SESSION["score1"]. ".<br>";
echo "Score for second quiz is " .$_SESSION["score2"]. ".<br>";
echo "Score for third quiz is " .$_SESSION["score3"]. ".<br>";
echo "Score for fourth quiz is " .$_SESSION["score4"]. ".<br>";
$score=$_SESSION["score1"]+ $_SESSION["score2"]+ $_SESSION["score3"]+$_SESSION["score4"];
echo "Total Score of the quiz is" .$score .".<br>";
?>
<a href="login.php">Try again</a>
</body>
</html> 
<?php
session_destroy();
?>