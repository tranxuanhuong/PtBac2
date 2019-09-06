<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td>Nhập a <input type="text" name="a" placeholder="Nhap a"></td>
        </tr>
        <tr>
            <td>Nhập b <input type="text" name="b" placeholder="Nhap b"></td>
        </tr>
        <tr>
            <td>Nhập c <input type="text" name="c" placeholder="Nhap c"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Kết Quả"></td>
        </tr>
    </table>
</form>
<?php
include "classParameter.php";

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    echo "Phương trình: " . $a . "x2 +" . $b . "x +" . $c . " = 0 ";
    echo "<br>";
    $quadratic = new classParameter($a, $b, $c);
    $delta = $quadratic->getDiscriminant();
    echo "Delta = : " . $delta . "<br>";
    if (empty($a) && empty($b) && empty($c)) {
        echo "Please input number";
    } else {
        if ($delta > 0) {
            echo "Root 1 = " . $quadratic->getRoot1() . "<br> Root 2 = " . $quadratic->getRoot2() . "<br>";
        }
        if ($delta = 0) {
            echo "Root 1 = " . $quadratic->getRoot1();
        } else {
            echo "The equation has no roots";
        }
    }
}
?>

</body>
</html>
