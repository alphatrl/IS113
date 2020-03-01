# Lab 6: Loop structure (any loop structure is allowed)

Learning Outcomes:

- Get familiar with using loop structure
- Get to solve problems using functions, conditional structure, for, foreach or while loop structure

## Part A (**)

Counting in binary is similar to counting in any other number system. Beginning with a single digit, counting proceeds through each symbol, in increasing order. Decimal (or base-10) counting uses the symbols **0** through **9**, while binary only uses the symbols **0** and **1.** Read more about how a decimal number can be converted to its binary equivalent:

- http://www.is.wayne.edu/olmt/binary/page3.html
- http://www.wikihow.com/Convert-from-Decimal-to-Binary

Let us see the method to convert decimal number 32(base 10) to its binary equivalent.

|                                |
|--------------------------------|
|32 divided by 2 gives 16 and remainder **0**|
|16 divided by 2 gives 8 and remainder **0**|
|8 divided by 2 gives 4 and remainder **0**|
|4 divided by 2 gives 2 and remainder **0**|
|2 divided by 2 gives 1 and remainder **0**|
|1 divided by 2 gives 0 and remainder **1**|

Do you notice that you are dividing the given decimal number by 2 and subsequently in every iteration, the quotient is divided by 2. The binary number is the sequence of remainders in reverse, from the bottom remainder to the top remainder.

Write a program in a file named **lab6_6.php** that converts a positive integer number (received from a HTML form) to its binary equivalent following the procedure explained above. You can check if your conversion is correct using the built-in function.

Try the built-in function decbin in PHP that converts decimal number to its binary equivalent.

![website_image](https://i.imgur.com/sYedA9H.png)

From:
[http://php.net/manual/en/function.decbin.php](http://php.net/manual/en/function.decbin.php)

Sample run of the program is shown below:

```text
Input decimal number is 32
Binary equivalent of 32 is 100000
```

## Part B (***)

Define a function called `merge()` that merges two associative arrays containing key-value pairs representing people. Each key-value pair in the association array represents one person’s name and age and the list is sorted in increasing order of people’s age.

The function merges the two lists into a single list in which the people are still ordered by their age.

Note: You are NOT allowed to use any sort function.

For example, if

```php
$list1 = ["John"=>12, "Kate"=>15, "Henry"=>35\],

# and

$list2 = ["Mike"=>18, "Scott"=>20, "Joseph"=>48 "Larry"=>54]
```

When invoked like this:

```php
var_dump(merge($list1, $list2))
```

The output would be:

```bash
array (size=7)
'John' => int 12
'Kate' => int 15
'Mike' => int 18
'Scott' => int 20
'Henry' => int 35
'Joseph' => int 48
'Larry' => int 54
```

**Note:** You are allowed to make your own assumptions
