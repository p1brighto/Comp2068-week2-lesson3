<?php

require_once('header.php');

?>

<form method="post" action="insert_racer.php">
<div>
	<label for="racer_name">Racer Name</label>
	<input name="racer_name" required />
</div>
<div>
	<label for="age">Age</label>
	<input name="age" maxlength="2" required />
</div>
<div>
	<label for="sex">Sex</label>
	<select name="sex">
		<option value="F">F</option>
		<option value="M">M</option>
	</select>
</div>
<div>
	<label for="phone_num">Phone</label>
	<input name="phone_num" maxlength="15" required />
</div>
<div>
	<label for="team_id">Team</label>
	<select name="team_id">
		<?php
			$sql = "SELECT team_id, team_name FROM teams ORDER BY team_name";
			$cmd = $conn->prepare($sql);
			$cmd->execute();
			$result = $cmd->fetchAll();

			//loop through results to create links to roster page
			foreach ($result as $row) {
				echo '<option value="' . $row['team_id'] . '">' . $row['team_name'] . '</option>';
			}

			$conn = null;
		?>
	</select>
</div>
<input type="submit" value="Save" />

</form>
</body>
</html>