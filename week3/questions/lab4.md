# Lab 4: Functions

Learning Outcomes:

- Understand how to write your own functions and invoke them
- Know the difference between invoking a built-in function and function of an imported module

## Part A

**fun_1.php** contains a form that accepts two integers, say n and f. Edit **fun_1.php** such that it displays whether f is a factor of n or not. You are required to implement a function called `is_factor` in **fun_1.php** that takes in 2 parameters n and f and returns True if f is a factor of n and False otherwise.

Assume that the user provides only integer values.

Here are the sample runs:

|Before | After |
|-------|-------|
|![f1](https://i.imgur.com/myYhD8l.png) |![f2](https://i.imgur.com/v52LUIK.png) |
|![f3](https://i.imgur.com/8y8K3v0.png) |![f4](https://i.imgur.com/7ldG2eh.png)

## Part B

**fun_2.php** contains a form that accepts two integers, say m and n. Edit **fun_2.php** such that it displays the sum of the powers from m<sup>0</sup> to m<sup>n</sup> (i.e, m<sup>0</sup> + m<sup>1</sup> + m<sup>2</sup> + … + m<sup>n</sup>). In **fun\_2.php**, you are required to define a function named sum\_of\_powers that takes in 2 parameters m and n. and computes the sum of the powers from m<sup>0</sup> to m<sup>n</sup> and returns the sum.

Hint: explore `pow()`

Assume that the user provides only integer values.

Here is a sample run:

|Before   |After    |
|---------|---------|
|![f5](https://i.imgur.com/gpiTD5N.png) |![f6](https://i.imgur.com/ffBUmQw.png)|

## Part C

**fun_3.php** contains a form that accepts two integers, say min and max. Edit **fun\_3.php** such that it displays all the perfect squares between min and max. For example, given min=10 and max=110, it displays the perfect squares – 16 25 36 49 64 81 100.

Assume that the user provides only integer values.

Hint: explore `sqrt()`, `floor()`, `ceil()`, `pow()`

Here is a sample run:

|Before   |After    |
|---------|---------|
|![f7](https://i.imgur.com/BdEazdQ.png) | ![f8](https://i.imgur.com/kVTjiOX.png)|

## Part D (*)

A sandwich typically consists of cheese, meat or/and vegetables placed in between two slices of bread. Consider a string “remember”, the sub-string “memb” is sandwiched between “re” and its mirror “er” on the other side. In **fun\_4.php**, write a function named get\_sandwich that takes in a string and returns the sandwiched string, if any, or None.

Hint: explore `substr()`

Here are some sample outputs when **fun_4.php** is run:

|Before   |After    |
|---------|---------|
|![fn1](https://i.imgur.com/1bOpKWE.png) |![fn2](https://i.imgur.com/Jwr1DpA.png)|
|![fn3](https://i.imgur.com/9j1uQje.png) |![fn4](https://i.imgur.com/cGw7eLh.png)|
|![fn5](https://i.imgur.com/63yfrz6.png) |![fn6](https://i.imgur.com/8dj4vGs.png)|

## Part E (***)

You may have written a program earlier using Caesar Cipher encoding, in which each letter is replaced by the letter that is some fixed positions away from the original letter.

> Let us use another simple form of encoding wherein each letter is replaced by its hexadecimal form > ([https://www.wikihow.com/Understand-Hexadecimal](https://www.wikihow.com/Understand-Hexadecimal)).
>
> Each of the a-z alphabets, digits 0-9 and special characters ( like , or . or space or ! ) are converted to a hex form using UTF-8 encoding as seen in ASCII table. There are many Text to Hex converters online.
>
> Example:
> [https://www.online-toolz.com/tools/text-hex-convertor.php](https://www.online-toolz.com/tools/text-hex-convertor.php). You can test your encoding program using the online convertor.
>
> In **fun_5.php** define two functions called encode and decode. The function encode takes in a string and returns the encoded string in hexadecimal format. The function decode, on the other hand takes in the encoded string in hexadecimal format and returns the original string.
>
> You can assume that the string passed into the function encode contains only valid characters from a-z or A-Z and punctuation symbols. You can also assume that a valid encoded string is passed into the function decode, i.e. every 2 characters represent the  hexadecimal form corresponding to the original character.

Here are sample outputs when **fun_5** is run:

|Before   |After    |
|---------|---------|
|![fn1](https://i.imgur.com/rWAimqY.png) |![fn2](https://i.imgur.com/pq7HIoe.png)|
|![fn3](https://i.imgur.com/eNRy4Iv.png) |![fn4](https://i.imgur.com/1aQo36l.png)|
