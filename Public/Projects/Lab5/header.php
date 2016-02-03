<html>
<head>
	<title>Lab 5</title>
	<link type="text/css" rel="stylesheet" href="styles.css" />
</head>

<body>
<div>

<ul>

<?php

require_once('db.php');

$sql = "SELECT team_id, team_name FROM teams";
$cmd = $conn->prepare($sql);
$cmd->execute();
$result = $cmd->fetchAll();

//loop through results to create links to roster page
foreach ($result as $row) {
	echo '<li><a href="roster.php?team_id=' . $row['team_id'] . '">' . $row['team_name'] . '</a></li>';
}


?>

	<li><a href="search.php">Search</a></li>
	<li><a href="add_racer.php">Add Racer</a></li>
</ul>

</div>