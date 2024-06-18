<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program To find your age in days</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form class="row mt-3" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Choose your DOB</span>
                <select class="form-select" name="yy">
                    <option value="">Year</option>
                    <?php
                    for ($i = 1900; $i <= 2022; $i++) {
                        echo "<option value = '$i'> $i </option>";
                    }
                    ?>
                </select>
                <select class="form-select" name="mm">
                    <option value="">Month</option>
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        echo "<option value = '$i'> $i </option>";
                    }
                    ?>
                </select>
                <select class="form-select" name="dd">
                    <option value="">Date</option>
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        echo "<option value = '$i'> $i </option>";
                    }
                    ?>
                </select>
            </div>
            <div class="input-group mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $mm = $_POST['mm'];
            $dd = $_POST['dd'];
            $yy = $_POST['yy'];
            $dob = $mm . "/" . $dd . "/" . $yy;
            $arr = explode('/', $dob);
            $dateTs = strtotime($dob);
            $now = strtotime('today');
            if (sizeof($arr) != 3) die('Error: Please enter a valid date');
            if (!checkdate($arr[0], $arr[1], $arr[2])) die('Please: Enter a valid dob');
            if ($dateTs >= $now) die('Enter a dob earlier than today');
            $ageDays = floor(($now - $dateTs) / 86400);
            $ageYears = floor($ageDays / 365);
            $ageMonths = floor(($ageDays - ($ageYears * 365)) / 30);
            echo " You are aprox $ageYears years and $ageMonths months old ";
        }
        ?>
    </div>
</body>

</html>