<html>
<?php 
session_start();
$category =$_GET["category"];
$diff = $_GET["difficulty"];
$_SESSION["amount"] = $diff;
echo "<h2>You selected:$category</h2>";
$question = fopen("math_easy.txt", "r");
$questions = array();
while(($line = fgets($question)) !==false){
    array_push($questions, $line);}
$index = array_rand($questions);
$slt_question = $questions[$index];
$QUESTION = explode("?", $slt_question);
$slt = $QUESTION[0];
$_SESSION["question"] = $slt;
$answer = $QUESTION[1];
$_SESSION["answer"] = $answer;
print "<p>$slt</p>";
print ""
?>
<form method="post" action="answer.php">
    <table> 
        <tr><th>Enter your answer</th></tr>
        <tr><td><textarea name="answer"></textarea></td></tr>
        <tr><td><input type="submit"></td></tr>
</table>
</form>
</html>