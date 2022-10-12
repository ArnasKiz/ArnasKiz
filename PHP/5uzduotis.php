<!DOCTYPE html>
<html lang="en">

<head>

<body>
    <?php

    ?>

    <form method="get" action="">
        <div>
            <label for="">1.</label>
            <input type="number" name="list[one]" />
        </div>

        <div>
            <label for="">2.</label>
            <input type="number" name="list[two]" />
        </div>

        <div>
            <label for="">3.</label>
            <input type="number" name="list[three]" />
            <button type="submit">Find</button>
        </div>
    </form>

    <?php

    if (isset($_GET['list'])) {
        $array = $_GET['list'];
        $result = false;
        foreach ($array as $value) {
            if (!$result) {
                $result = $value;
            }
            if ($result < $value) {
                $result = $value;
            }
        }

        echo 'Highest element in array: ' . $result;
    }

    ?>

</body>

</head>

</html>