	

<!-- HTML can not handle Super Global Variables (GET, POST) -->

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>
	<body>
		<a id="top"></a>
		<h3>Get Dump</h3>
		<?php
			var_dump($_GET); /* posted in the URL, great for search forms */
		?>
		<h3>Post Dump</h3>
		<?php	
			var_dump($_POST); /* not posted in URL, can be used for files */
		?>
<hr>
	<h2>User Login</h2>
		<form method="POST" action="my_first_form_lecture.php">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Enter Username here">
			</p>
			<p>
				<label for="pasword">Password</label>
				<input id="password" name="password" type="password" placeholder="Enter Password here">
			</p>
			<p>
				<button type="submit">Login</button>
			</p>			
		</form>
<hr>
	<h2>Compose an Email</h2>
		<form method="POST" action="my_first_form_lecture.php">
			<p>
				<label for="to">To:</label>
				<input id="to" name="to" type="email" placeholder="Who are you emailing?">
			</p>
			<p>
				<label for="from">From:</label>
				<input id="from" name="from" type="email" placeholder="Who is this email from?">
			</p>
			<p>
				<label for="subject">Subject:</label>
				<input id="subject" name="subject" type="text" placeholder="What is the subject of this email?">
			</p>
			<p>
				<label for="body"></label>
				<textarea id="body" name="body" type="text" placeholder="Enter the body of the email here" rows="5" cols="40"></textarea>
			</p>
			<p>
				<input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
				<label for="save_copy">Would you like to save a copy of this email?</label>
			</p>
			<p>
				<button type="submit">Send Email</button>
			</p>
		</form>
<hr>
	<h2>Multiple Choice Test</h2>
		<form method="POST" action="my_first_form_lecture.php">
			<p>What is your favorite type of music?</p>
				<label><input type="radio" id="music1" name="favorite_music" value="rock">Rock</label>
				<label><input type="radio" id="music2" name="favorite_music" value="country">Country</label>
				<label><input type="radio" id="music3" name="favorite_music" value="rap">Rap</label>
				<label><input type="radio" id="music4" name="favorite_music" value="electronic">Electronic</label>
				<label><input type="radio" id="music5" name="favorite_music" value="classical">Classical</label>
				<label><input type="radio" id="music6" name="favorite_music" value="pop">Pop</label>
				<label><input type="radio" id="music7" name="favorite_music" value="jazz">Jazz</label>
				<button type="submit">Submit</button>
			<p>What are your top 2 favorite things in this list?</p>
				<p>
					<label for="sleeping"><input type="checkbox" id="sleeping" name="favorite[]" value="yes">Sleeping</label>
				</p>
				<p>
					<label for="eating"><input type="checkbox" id="eating" name="favorite[]" value="yes">Eating</label>
				</p>
				<p>
					<label for="gaming"><input type="checkbox" id="gaming" name="favorite[]" value="yes">Gaming</label>
				</p>
				<p>
					<label for="exercising"><input type="checkbox" id="exercising" name="favorite[]" value="yes">Exercising</label>
				</p>
				<p>
					<label for="sports"><input type="checkbox" id="sports" name="favorite[]" value="yes">Playing Sports</label>
				</p>
				<button type="submit">Submit</button>
			<p>
				<label for="state">What is your favorite state?</label>
				<select id="state" name="state">
					<option value="california" selected disabled>Favorite State?</option>
					<option value="texas">Texas</option>
					<option value="california">California</option>
					<option value="florida">Florida</option>
					<option value="new_york">New York</option>	
				</select>
				<button type="submit">Submit</button>
			<p>
		</form>
<hr>
	<h2>Select Testing</h2>
		<form method="POST" action="my_first_form_lecture.php">
			<label for="height">Are you taller than 6 feet?</label>
			<select id="height" name="height">
				<option selected value="1">Yes</option>
				<option value="0">No</option>
			</select>
			<button type="submit">Submit</button>
		</form>
		<hr>
			<p>
			<a href="#top">Return to the top of the Page</a>
			</p>
	</body>
</html>
