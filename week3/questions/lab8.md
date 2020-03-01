# Lab 8: Dictionaries (Associative Arrays)

## Part A (*)

Complete the function `compute_bill` in the file that takes in a dictionary of items purchased by the customer, and price of items and returns the amount to be paid.

```php
<?php
  $price_info = [
    'pencil'=> 0.80,
    'pen' => 1.20,
    'eraser' => 0.50
  ];
  
  #complete this function
  function compute_bill($cart, $pricing){

  }

  $jane_items = ['pen'=>10, 'eraser'=>2];
  $eric_items = ['pencil'=>12, 'eraser'=>5, 'pen'=>2];
  
  echo "Jane's bill amount $" . compute_bill($jane_items, $price_info);
  echo "Eric's bill amount $" . compute_bill($eric_items, $price_info);
?>
```

Here is the expected output (with the given test data):

```text
Jane's bill amount $ 13
Eric's bill amount $ 14.5
```

## Part B (**)

In a file named **lab8_4.php**, copy the code shown below.
Write a function called `reverse_dict` in the file that takes in a dictionary and reverses the dictionary. That is, you are supposed to return a new dictionary that creates keys out of values and values out of keys. You can assume that the input to the functions consists of dictionary whose values are indexed arrays (aka. lists).

```php
<?php
#write the function
$dict1 = reverse_dict(["a"=>[1,2,3], "b"=>[1,2], "c"=>[3,4], "d"=>[5,6]]);

$student_subjects = reverse_dict(["Jane"=>["Economics","Physics","Chemistry"], "Mark"=>["Literature","Chemistry","Biology"], "Sarah"=>["Literature","Physics","Chemistry"]]);

var_dump($dict1);
var_dump($student_subjects);
?>
```

Here is the output when **lab8\_4** is run (with the given two test data):

```bash
# C:\wamp64\www\is111\lab8\ex4.php:5:
array(size=6)
  1 =>
    array (size=2)
      0 => string 'a' (length=1)
      1 => string 'b' (length=1)
  2 =>
    array (size=2)
      0 => string 'a' (length=1)
      1 => string 'b' (length=1)
  3 =>
    array (size=2)
      0 => string 'a' (length=1)
      1 => string 'c' (length=1)
  4 =>
    array (size=1)
      0=> string 'c' (length=1)
  5 =>
    array (size=1)
      0 => string 'd' (length=1)
  6 =>
    array (size=1)
      0 => string 'd' (length=1)
```

```bash
# C:\wamp64\www\is111\lab8\ex4.php:6:
array (size=5)
  'Economics' =>
    array (size=1)
      0 => string 'Jane' (length=4)
  'Physics' =>
    array (size=2)
      0 => string 'Jane' (length=4)
      1 => string 'Sarah' (length=5)
  'Chemistry' =>
    array (size=3)
      0 => string 'Jane' (length=4)
      1 => string 'Mark' (length=4)
      2 => string 'Sarah' (length=5)
  'Literature' =>
    array (size=2)
      0 => string 'Mark' (length=4)
      1 => string 'Sarah' (length=5)
  'Biology' =>
    array (size=1)
      0 => string 'Mark' (length=4)
```
