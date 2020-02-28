<?php
    # Enter code here

    include_once 'Rational.php';

    print_r($_GET);

    if (empty($_GET)) {
        echo("<form>");

        echo('<h3>Rational 1</h3>');
        echo("
            Numerator:
            <input type='text' name='aNum' /> <br />
            Denominator: 
            <input type='text' name='aDen' /> <br />
        ");

        echo('<h3>Rational 2</h3>');
        echo("
            Numerator:
            <input type='text' name='bNum' /> <br />
            Denominator: 
            <input type='text' name='bDen' /> <br />
        ");

        echo("
            <br />

            Operation:
            <select name='op'>
                <option value='+'>+</option>
                <option value='-'>-</option>
                <option value='*'>*</option>
                <option value='/'>/</option>
            </select>

            <br /><br />
        ");

        echo("<input type='submit'>");

        echo("</form>");
    } 
    else {
        $aNumber = new Rational($_GET['aNum'], $_GET['aDen']);
        $bNumber = new Rational($_GET['bNum'], $_GET['bDen']);
        $op = $_GET['op'];

        echo("First Number: " . $aNumber->toString() . "<br />");
        echo("Second Number: " . $bNumber->toString() . "<br />");
    
        if ($op == '+') {
            echo("Result: " . $aNumber->add($bNumber));
        } elseif ($op == '-') {
            echo("Result: " . $aNumber->subtract($bNumber));
        } elseif ($op == '*') {
            echo("Result: " . $aNumber->multiply($bNumber));
        } else {
            echo("Result: " . $aNumber->divison($bNumber));
        }
    }
    
?>