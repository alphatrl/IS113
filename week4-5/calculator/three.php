<?php

function calculate2($n1, $n2, $opr) {
    // YOUR CODE GOES HERE
    // COPY YOUR CODE FROM Part A (two.php)
    $result = '';

    if ($opr == '+') { $result = $n1 + $n2;} 
    elseif ($opr == '-') { $result = $n1 - $n2;}
    elseif ($opr == '*') { $result = $n1 * $n2;}  
    elseif ($opr == '/') {
        if ($n2 == 0) {$result = "Undefined";}
        else {$result = $n1 / $n2;}
    }

    return $result;
}

function calculate3($n1, $n2, $n3, $opr1, $opr2) {
    // PART C
    // YOUR CODE GOES HERE
    $result = '';

    // BODMAS rule
    // Only special case if * or / is found at n2 and n3
    // Other than that, it will be solve from left to right
    if ($opr2 == "*" || $opr2 == "/") {
        $result = calculate2($n2, $n3, $opr2);

        // Error handling
        if ($result != "Undefined") {
            $result = calculate2($n1, $result, $opr1);
        }
    } else {
        $result = calculate2($n1, $n2, $opr1);

        // Error handling
        if ($result != "Undefined") {
            $result = calculate2($result, $n3, $opr2);
        }
    }


    return $result;
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$operator1 = $_POST['operator1'];
$operator2 = $_POST['operator2'];

$result = calculate3($num1, $num2, $num3, $operator1, $operator2);

?>
<html>
<body>
<h1>Result: <?= $result; ?></h1>
</body>
</html>