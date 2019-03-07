<?php

/**
 * The program will create a new save board
 * Jason Ho - 000774370
 * This work is my own and it has not been copied or shared with anyone. 
 */
try {
    $dbh = new PDO("mysql:host=localhost;dbname=000774370", "000774370", "19750719");
} catch (Exception $e) {
    die("ERROR: Sorry couldn't connect. ");
}

$scoreOnes1 = $_POST["scoreOnes1"];
$scoreOnes2 = $_POST["scoreOnes2"];
$scoreTwos1 = $_POST["scoreTwos1"];
$scoreTwos2 = $_POST["scoreTwos2"];
$scoreThrees1 = $_POST["scoreThrees1"];
$scoreThrees2 = $_POST["scoreThrees2"];
$scoreFours1 = $_POST["scoreFours1"];
$scoreFours2 = $_POST["scoreFours2"];
$scoreFives1 = $_POST["scoreFives1"];
$scoreFives2 = $_POST["scoreFives2"];
$scoreSixes1 = $_POST["scoreSixes1"];
$scoreSixes2 = $_POST["scoreSixes2"];
$scoreSevens1 = $_POST["scoreSevens1"];
$scoreSevens2 = $_POST["scoreSevens2"];
$scoreMiniRun1 = $_POST["scoreMiniRun1"];
$scoreMiniRun2 = $_POST["scoreMiniRun2"];
$scoreBrokenRun1 = $_POST["scoreBrokenRun1"];
$scoreBrokenRun2 = $_POST["scoreBrokenRun2"];
$scoreScramble1 = $_POST["scoreScramble1"];
$scoreScramble2 = $_POST["scoreScramble2"];
$scoreHighLow1 = $_POST["scoreHighLow1"];
$scoreHighLow2 = $_POST["scoreHighLow2"];
$scoreFullHouse1 = $_POST["scoreFullHouse1"];
$scoreFullHouse2 = $_POST["scoreFullHouse2"];
$scoreHighFive1 = $_POST["scoreHighFive1"];
$scoreHighFive2 = $_POST["scoreHighFive2"];
$scoreEvens1 = $_POST["scoreEvens1"];
$scoreEvens2 = $_POST["scoreEvens2"];
$scoreOdds1 = $_POST["scoreOdds1"];
$scoreOdds2 = $_POST["scoreOdds2"];
$scoreTriple1 = $_POST["scoreTriple1"];
$scoreTriple2 = $_POST["scoreTriple2"];
$scoreQuartet1 = $_POST["scoreQuartet1"];
$scoreQuartet2 = $_POST["scoreQuartet2"];
$bonus1 = $_POST["bonus1"];
$bonus2 = $_POST["bonus2"];
$player1Total = $_POST["player1Total"];
$player2Total = $_POST["player2Total"];
$gameNumber = $_POST["gameNumber"];
$playerTurn = $_POST["playerTurn"];
$player = 1;
$round = $_POST["round"];
$countDown = $_POST["countDown"];

	$sql3 = "SELECT COUNT(*) FROM board";
	$stmt3 = $dbh->prepare($sql3);
	$result = $stmt3->execute();
	
if ($result) {
	$sql2 = "DELETE FROM board WHERE gameNumber = 1";
	$stmt2 = $dbh->prepare($sql2);
	$result = $stmt2->execute();
} 
	$sql = "INSERT INTO board(scoreOnes1, scoreOnes2, scoreTwos1, scoreTwos2, scoreThrees1, scoreThrees2, scoreFours1, scoreFours2, scoreFives1, scoreFives2, scoreSixes1, 
			scoreSixes2, scoreSevens1, scoreSevens2, scoreMiniRun1, scoreMiniRun2, scoreBrokenRun1, scoreBrokenRun2, scoreScramble1, scoreScramble2, scoreHighLow1,
			scoreHighLow2, scoreFullHouse1, scoreFullHouse2, scoreHighFive1, scoreHighFive2, scoreEvens1, scoreEvens2, scoreOdds1, scoreOdds2, scoreTriple1, scoreTriple2, 
			scoreQuartet1, scoreQuartet2, bonus1, bonus2, player1Total, player2Total, gameNumber, playerTurn, round, countDown ) VALUES ('$scoreOnes1', '$scoreOnes2', '$scoreTwos1', '$scoreTwos2', '$scoreThrees1', '$scoreThrees2', '$scoreFours1', '$scoreFours2', '$scoreFives1', '$scoreFives2', 
			'$scoreSixes1', '$scoreSixes2', '$scoreSevens1', '$scoreSevens2', '$scoreMiniRun1', '$scoreMiniRun2', '$scoreBrokenRun1', '$scoreBrokenRun2', '$scoreScramble1', 
			'$scoreScramble2', '$scoreHighLow1', '$scoreHighLow2', '$scoreFullHouse1', '$scoreFullHouse2','$scoreHighFive1', '$scoreHighFive2', '$scoreEvens1','$scoreEvens2', '$scoreOdds1', '$scoreOdds2', 
			'$scoreTriple1', '$scoreTriple2', '$scoreQuartet1', '$scoreQuartet2', '$bonus1', '$bonus2', '$player1Total', '$player2Total', '$gameNumber', '$playerTurn', '$round', '$countDown')";
	$stmt = $dbh->prepare($sql);
	$result = $stmt->execute();

if ($result){
    $message = "success";
} else {
    $message = "failure";
	echo $sql;
	echo "new id: {$dbh->lastInsertID()}";
}
echo $message;

?>