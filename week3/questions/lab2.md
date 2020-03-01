# Lab 2: Conditionals and Iteration

Learning Outcomes:

- > Get familiar with using if-else, if-elseif structures and boolean operators

- > Get familiar with using for loop structure

## Part A

A shop pays its sales staff based on each salesperson’s monthly sales. Each salesperson is paid a basic monthly salary of $2000 plus commission based on the following table:

| Monthly sales ($)  | Commission rate (%) |
| ------------------ | ------------------- |
| <10,000            | 5                   |
| 10,000 to <15,000  | 10                  |
| 15,000 to <18,000  | 15                  |
| 18,000 and above   | 18                  |

Write a program in a file named **lab2_2.php** that does the following:

(i) Receives the salesperson’s monthly sales amount from a suitable html form

(ii) Calculate the salesperson’s commission

(iii) Calculate the salesperson’s pay (i.e. $2000 + commission)

(iv) Display salesperson’s commission rate in percentage and monthly pay.

Write a simple **lab2_2.html** prompting a user to enter the monthly sales amount.

Here is a sample output of **lab2_2.php** (for monthly sales amount = 14450):

```text
Entered monthly sales amount($):14450
Commission rate for sale of sales amount 14450 is 10%
The monthly pay for the salesperson is $3445
```

## Part B

Write a program in a file named **lab2_2.php** that simulates a simple jackpot machine. You are given the program’s partial code that generates and shows 3 random numbers (between 1 and 9, including 1 and 9) in a row.

Lines 02 to 04 calls the function in random module to generate 3 random numbers between 1 and 9 and assigns them to variables num1, num2 and num3 respectively. Line 01 enables to call the function from random module.

Complete the program to display one of the following messages: “Try again!”, “2 of a kind” or “Jackpot!” depending on the 3 numbers generated.

```php
<?php
$num1 = rand(1,10);
$num2 = rand(1,10);
$num3 = rand(1,10);

echo "*****************<br/>";
echo "** $num1 ** $num2 ** $num3 **<br/>";
echo "*****************<br/>";
# write your code here
?>
```

Here are some sample runs of **lab2_2**: (the random numbers generated
could be different)

```text
*****************
** 3 ** 2 ** 7 **
*****************
** Try again! **
```

```text
*****************
** 7 ** 4 ** 7 **
*****************
** 2 of a kind **
```

```text
*****************
** 9 ** 9 ** 9 **
*****************
** Jackpot!! **
```

## Part C

In number theory, a perfect number is a positive integer that is equal to the sum of all its factors excluding itself. For example 6 is a perfect number because the sum of its factors i.e. 1 + 2 + 3 = 6

Write a program in a file named **lab2_3.php** that takes in a positive integer, say 6, from a suitable html form. The program should then check if the number entered is a perfect number or not and print the result. You can assume that only positive integers are entered.

Some examples of perfect numbers are 6, 28, 496

Here are some sample runs of **lab2_3**:

```text
Yes, 28 is a perfect number
```

```text
96 is not a perfect number
```

## Part D

Write a program in a file named **lab2_4.php** that gets a binary number from a suitable HTML form (a binary number consists of 1s and
0s), and prints True or False corresponding to the digits represented by the user input, True to represent 1 and False to represent 0. You can assume that the user enters a valid binary number.

Note: You may want to use a for loop to separate the digits.

Here are some sample runs of running **lab2_4**:

```text
Input binary number: 1011
True
False
True
True
```

```text
Input binary number: 1011011
True
False
True
True
False
True
True
```

## Part E

In Singapore, personal income tax rate for residents is progressive. To make the exercise simpler, we ignore tax rebates and group all chargeable income above $200,000 into one category with an income tax rate of 20% as shown in the table below:

|Chargeable Income|Income Tax Rate (%)|Gross Tax Payable ($)|
|-----------------|-------------------|---------------------|
|First $20,000</br>Next $10,000 |0</br>2 |0</br>200 |
|First $30,000</br>Next $10,000 |-</br>3.50 |200</br>350|
|First $40,000</br>Next $40,000 |-</br>7 |550</br>2,800|
|First $80,000</br>Next $40,000 |-</br>11.5 | 3,350</br>4,600|
|First $120,000</br>Next $40,000|-</br>15 | 7,950</br>6,000|
|First $160,000</br>Next $40,000|-</br>18 | 13,950</br>7,200|
|First $200,000</br>In excess of 200,000|-</br>20| 21,150</br>|

The actual tax rate applicable for personal income as of 2017 can be got [here](https://www.iras.gov.sg/irashome/Individuals/Locals/Working-Out-Your-Taxes/Income-Tax-Rates/)

Write a program in a file named **lab2_5.php** that gets input from **lab2_5.html** for personal annual chargeable income and displays the income tax payable by the person.

Here are some sample runs of **lab2_5**:

```text
Input personal income: 50000
Tax payable: $1250
```

```text
Input personal income: 80000
Tax payable: $3350
```

```text
Input personal income: 225000.50
Tax payable: $26150.1
```

```text
Input personal income: 300000
Tax payable: $41150
```

## Part F

Singapore has coins in denominations of dollar one, and cents 50, 20, 10, 5 and 1 (though 1 cent coins are not minted any more). Write a program in a file named **lab2_6.php** that takes in a floating point value representing amount from a user (using a HTML form), for example 2.8 indicating 2 dollars and 80 cents. The program should then display the minimum number of coins required to repay the amount in coins. Assume that the user enters a value above 0 and below 10.

Here are some sample runs of **lab2_6**:

```text
Entered amount: 5.1
Number of 1$: 5
Number of 10c: 1
```

```text
Entered amount: 3.95
Number of 1$: 3
Number of 50c: 1
Number of 20c: 2
Number of 5c: 1
```

## Part G (*)

Write a program in a file named **lab2_7.php** that prints ascending sequence. The program is to get inputs for starting number of ascending sequence and count of sequences (from a suitable HTML form). Assume thatthe user enters positive integers for all inputs.

Here are some sample runs of **lab2_7:**

```text
Entered count of ascending sequence:5
Entered starting digit:2
2 23 234 2345 23456
```

```text
Entered count of ascending sequence:3
Entered starting digit:6
6 67 678
```
