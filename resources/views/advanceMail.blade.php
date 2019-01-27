<!DOCTYPE html>
<html>
<head>
	<title>Advance Mail</title>
</head>
<body>
	<br/>
	<h1>Send Mail</h1>
	<form action="send" method="post">
		{{csrf_field()}}
		to: <input type="text" name="EmailAdrs">
		message : <textarea name="message"></textarea>
		<input type="submit" value="Send">
	</form>
</body>
</html>