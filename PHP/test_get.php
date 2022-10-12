<html>
<body>
<a href="test_get.php?subject=PHP&web=google.com">Test $GET</a>
<?php
if(isset($_GET['subject']) && isset($_GET['web'])) {
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
}
?>
</body>
</html>