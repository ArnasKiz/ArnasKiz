<!DOCTYPE html>
<html>
<body>
<form method="post" action="index.php">
Number: <input type="text" name="number">
<input type="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['number'])) {
$name = $_POST['number'];
if (empty($name)) {
echo "Name is empty";
} else {
echo $name;
}
}
?>