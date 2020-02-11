<?php

function calculate2($n1, $n2, $opr) {
    // PART A
    // YOUR CODE GOES HERE
    $result = '';
    
    if ($opr == '+') { $result .= $n1 + $n2;} 
    elseif ($opr == '-') { $result .= $n1 - $n2;}
    elseif ($opr == '*') { $result .= $n1 * $n2;}  
    elseif ($opr == '/') {
        if ($n2 == 0) {$result = "Undefined";}
        else {$result .= $n1 / $n2;}
    }

    return $result;
}

$errors = [];

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$result = calculate2($num1, $num2, $operator);

?>
<html>
<body>
    
<?php
    // PART B
    // YOUR CODE GOES HERE
    // Use $errors[] Array to list form input validation errors (IF ANY)
    global $errors;

    if (empty($num1) || empty($num2)) {

        if (empty($num1)) {$errors[] = "num1 is missing";}
        if (empty($num2)) {$errors[] = "num2 is missing";}

    } else {
        if (!ctype_digit($num1)) {
            $errors[] = "num1 is non-numeric";
        }
    
        if (!ctype_digit($num2)) {
            $errors[] = "num2 is non-numeric";
        }
    }

    

    echo("<ul>");
    foreach ($errors as $msg) {
        echo("<li>$msg</li>");
    }
    echo("</ul>");


?>

Result: <h1><?= $result; ?></h1>

</body>
</html>