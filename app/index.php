<!DOCTYPE html>
<html>
<head>
<title> Formulario de contacto PHP + MySQL </title>
</head>
<body>
<h3> Contacto</h3>
<form action="push-form.php" method="post">
  Nombre:<br>
  <input type="text" name="u_name" required><br>

  Email:
  <input type="email" name="u_email" required><br>

Asunto:<br>
  <input type="text" name="subj" required><br>

Mensaje:<br>
  <input type="text" name="message" required><br>
<input type="submit" value="Submit"><br>
</form>
</body>
</html>
