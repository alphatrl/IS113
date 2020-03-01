# Question 16 - Sudoku

## Part A

The following table represents a partial sudoku puzzle. Represent this as a two-dimensional array. Check that the 3 x 3 box contains the digits 1 through 9 by completing the function **isValid**. Additionally, complete function **printBox** to get a nice visual output of a sudoku box.

![f1](https://i.imgur.com/5pT2ebv.png)

The output of the resultant php page should be as follows:

![f2](https://i.imgur.com/KBNeKOP.png)

A partially completed php page is shown below:

```php
<!DOCTYPE html>
<html>
<head>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
    $sudoku_box = …; // complete me and the rest of the code!

    echo "The following sudoku box <br/>";
    printBox($sudoku_box);

    if (isValid($sudoku_box)){
        echo "is <strong>valid</strong>";
    }
    else {
        echo "is <strong>Invalid</strong>";
    }

    function printBox($sudoku_box){
        // oh no i'm empty, complete me!
        // but you may declare other functions as you wish - don't have to use me!
    }

    function isValid($sudoku_box){
        // oh no i'm empty, complete me!
        // but you may declare other functions as you wish - don't have to use me!
    }
?>
</body>
</html>
```

## Part B (***)

Extend the code so that an explanation is given when a sudoku box is invalid (e.g., “There is less than 3 rows”, “Number 9 is missing from the box”, etc.). Extend the code so that isValid accepts a full sudoku and not just one of its nine sub boxes
([https://en.wikipedia.org/wiki/Sudoku](https://en.wikipedia.org/wiki/Sudoku)).
