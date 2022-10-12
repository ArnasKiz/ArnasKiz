<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<?php
if (isset($_GET['find'])) {
    $number = $_GET['find'];
    echo $number;
    $exist = false;
    $array = [43, 95, 14961, 1518, 2188, 5178];

    foreach ($array as $value) {
        if ($value == $number) {
            $exist = true;
            break;
        }
    }
}

?>

<body>
    <form method="get" action="">
        <label for="find-input">Number</label>
        <input id="find-input" type="number" name="find" />
        <button type="submit">Find</button>
    </form>


</body>

<?php

if (isset($number) && isset($exist)) {
    echo 'Find ' . $number . '<br>';
    if ($exist == true) {
        echo 'Result: found';
    } else {
        echo 'Result: not found';
    }
}
?>

</html>