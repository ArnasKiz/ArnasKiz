<!DOCTYPE html>
<html lang="en">

<head>

<body>
    <?php

    ?>

    <form method="get" action="">
        <div>
            <label for="">1.</label>
            <input type="number" name="list[]" />
        </div>

        <div>
            <label for="">2.</label>
            <input type="number" name="list[]" />
        </div>

        <div>
            <label for="">3.</label>
            <input type="number" name="list[]" />
        </div>

        <div>
            <label for="">Module. </label>
            <input type="number" name="modulo" />
        </div>

        <div>
            <button type="submit">Find</button>
        </div>
    </form>

    <?php

    if (isset($_GET['list']) && isset($_GET['modulo'])) {
        $array = $_GET['list'];
        $mod = $_GET['modulo'];
        if ($mod) {
            $sum = 0;
            foreach ($array as $value) {
                if ($value) {
                    $sum += $value;
                }
            }

            if ($sum && $mod) {
                echo 'Liekana: ' . $sum % $mod;
            }
        }
    }


    ?>

</body>

</head>

</html>