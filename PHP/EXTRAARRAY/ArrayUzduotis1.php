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
        $count = 0;
        $avg = 0;

        foreach ($array as $value) {
            $count++;
            $avg += $value;
        }
        if ($count) {
            $avg = round($avg / $count, 2);
        }
        echo 'Average' . $avg;
    }

    ?>

</body>

</head>

</html>