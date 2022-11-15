<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$hitung = $_POST['hitung'];
if ($hitung == "+") {
    $hasil = $number1 + $number2;
} else {
    if ($hitung == "-") {
        $hasil = $number1 - $number2;
    } else {
        if ($hitung == "-") {
            $hasil = $number1 - $number2;
        } else {
            if ($hitung == "*") {
                $hasil = $number1 * $number2;
            } else {
                if ($hitung == "/") {
                    $hasil = $number1 / $number2;
                }
            }
        }
    }
}
?>
header('location: index.php');
</body>
</html>
