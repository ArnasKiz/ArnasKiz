<!DOCTYPE html>
<html lang="en">

<head>


<body>

    <?php
    $array = [43, 95, 14961, 1518, 2188, 5178];
    if (isset($_GET['find'])) {
        $number = $_GET['find'];
        $index = null;

        foreach ($array as $key => $value) {
            if ($number == $value) {
                $index = $key;
                break;
            }
        }
    }
    ?>

    <form method="get" action="">
        <label for="find-input">Where is it?</label>
        <input id="find-input" type="number" name="find" />
        <button type="submit">Find</button>
    </form>

    <?php
    if (isset($number)) {
        echo "Find element {$number} <br>";
        if ($index !== null) {
            echo "Index: {$index} <br>";
        } else {
            echo "Index: element.exe not found";
        }
    }
    ?>

</body>


</head>

</html>