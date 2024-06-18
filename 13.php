<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program To find the Volume of a Cylinder</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form class="row mt-3" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Liters</span>
                <input type="text" class="form-control" name="liters" value="" placeholder="Enter How Many Liters Milk vendor Buy" required>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $milk_buy = $_POST['liters'];
            if ($milk_buy >= 4 || $milk_buy % 4 == 0) {
                $Water_add = $milk_buy + 1;
            }

            $buy_cost = $milk_buy * 3.25;
            $sale_cost = $Water_add * 4.15;
            $gain = $sale_cost - $buy_cost;
            echo "Milk = " . $milk_buy . "liters<br>";
            echo "Gain of Milk Vendor : " . $gain . " Rupees";
            return 0;
        }
        ?>
    </div>
</body>

</html>