<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stadium</title>
	<link rel="icon" type="icon/img" href="images/Coat_of_arms_of_Ghana.svg.png">
	<link rel="stylesheet" type="text/css" href="styles/Dashboard.css">
	<link rel="stylesheet" type="text/css" href="styles/active.css">
	<link rel="stylesheet" type="text/css" href="styles/cards.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li>
					<img src="images/Coat_of_arms_of_Ghana.svg.png">
				</li>
				<li id="dash" >
					<a href="Dashboard.php" >
						DashBoard
					</a>
				</li>
				<li>
					<a href="#">
						Events
					</a>
					
				</li>
				<li>
					<a href="#" class="active">
						Stadiums
					</a>
				</li>
				<li>
					<a href="#">
						Users
					</a>
					
				</li>
				<li>
					<button> 
						Logout
					</button>
				</li>
			</ul>
		</nav>
	</header>

	<main>
		<form action="../Backend/addStadium.php">
			<label>
				Stadium Name<span class="required">*</span>
			</label>
			<input type="text" name="stadium_name" placeholder="enter stadium name here" required ><br>

			<label>
				Stadium Type<span class="required">*</span>
			</label>
			<input type="radio" name="stadium_type" value="Stadium" checked>
			<label>Stadium</label>
			<input type="radio" name="stadium_type" value="park">
			<label>Park</label><br>

			<!-- Capacity -->
			<label>
				Capacity<span class="required">*</span>
			</label>
			<input type="number" name="capacity" required><br>

<!-- Location -->
			<label>
				Location
			</label>
			<input type="text" name="town" placeholder="enter town/city" required>
			<select name="region">
				<option value="">
					Select Region
				</option>
				<option value="Greater Accra">
					Greater Accra
				</option>
				<option value="Northern Region">
					Northern Region
				</option>
				<option value="UpperEast Region">
					UpperEast Region
				</option>
				<option value="Upper West Region">
					Upper West Region
				</option>
				<option value="Ashanti Region">
					Ashanti Region
				</option>
				<option value="Brong Ahafo Region">
					Brong Ahafo Region
				</option>
				<option value="Western Region">
					Western Region
				</option>
				<option value="Central Region">
					Central Region
				</option>
				<option value="Volta Region">
					Volta Region
				</option>
				<option value="Eastern Region">
					Eastern Region
				</option>
			</select><br>

			<label>
				Year Built
			</label>
			<input type="date" name="date" required><br>

			<label>
				Email
			</label>
			<input type="Email" name="email" placeholder="Email" required>
			<label>
				Contact
			</label>
			<input type="text" name="number" required><br>

			<label>
				Club Associated 
			</label>
			<input type="text" name="club_associated">

			<input type="submit" name="submit" value="submit">
			<input type="reset" name="reset" value="reset">
		</form>
	</main>
</body>
</html>

