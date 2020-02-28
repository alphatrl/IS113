<?php
    # Enter code here

    include_once 'Person.php';

    // If $POST is empty
    if (empty($_GET)) {
        
        // Person 1
        echo("
            <form method='GET'>
            <h3>Person 1</h3>
            First Name: <input type='text' name='aPersonFName' /> <br />
            Last Name: <input type='text' name='aPersonLName' /> <br />
            Age: <input type='text' name='aPersonAge' /> <br />

            <h3>Person 2</h3>
            First Name: <input type='text' name='bPersonFName' /> <br />
            Last Name: <input type='text' name='bPersonLName' /> <br />
            Age: <input type='text' name='bPersonAge' /> <br />

            <br />
            <input type='submit' value='submit' />
            </form>
        ");



    } else {
        $aPerson = new Person($_GET['aPersonFName'], $_GET['aPersonLName'], $_GET['aPersonAge']);
        $bPerson = new Person($_GET['bPersonFName'], $_GET['bPersonLName'], $_GET['bPersonAge']);
        
        if ($aPerson->isOlder($bPerson)) {
            echo ("The older person is " . $aPerson->toString());
        } 
        
        else if ($bPerson->isOlder($aPerson)) {
            echo ("The older person is " . $bPerson->toString());
        }

        else {
            echo ("Both person objects are of the same age");
        }
    }
    
?>