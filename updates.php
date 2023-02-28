<!DOCTYPE html>
<html>

<head>
    <title>UPDATE MATCHES FORM</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
    <h2>Sign Up Form</h2>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
        <label for="name">match name:</label>
        <input type="text" name="name1" id="name"><br><br>
		<label for="name">match id:</label>
		<select name="id" id="name">
              <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>

		</select><br><br>
        <label for="email">match date</label>
        <input type="name2" name="name2" id="email"><br><br>
        <label for="password">results</label>
        <input type="name3" name="name3" id="password"><br><br>
        <label for="password">link</label>
        <input type="link" name="passwor" id="password"><br><br>
        <label for="image">Image</label>
        <input type="file" name="theimage" id="image">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>