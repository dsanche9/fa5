<?php session_start(); ?>
<html>
<head><title>Hello app</title>
</head>
<body>
Enter Email: <input type="email" name="useremail"><br />
Enter Cell Phone (1-XXX-XXX-XXXX): <input type="phone" name="phone"><br />
Enter Email of user: <input type="email" name="useremail"><br />
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="result.php" method="POST">
<!-- MAX_FILE_SIZE must precede the file input field -->
<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
<!-- Name of input element determines name in $_FILES array -->
Send this file: <input name="userfile" type="file" /><br />
<input type="submit" value="Send File" />
</form>
<hr />
</form>
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="gallery.php" method="POST">
Enter Email of user for gallery to browse: <input type="email" name="email">
<input type="submit" value="Load Gallery" />
</form>
</body>
</html>
