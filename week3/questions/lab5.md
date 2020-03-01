# Lab 5: Indexed Arrays

Learning Outcomes:

- Get familiar with using indexed array
- Get to know to modify arrays, add, remove element from arrays
- Get to solve problems using arrays

## Part A

Examine **arr_1.php** given to you. Complete the function `get_numbers` to return a new array that contains only integers between min and max parameters, inclusively. Your code should not modify the original array.

Here is a sample output when **arr_1.php** is run (with the given test code):

```text
Original array: [4, 10, 12, 28, 24, 18, 5, 20, 15, 21, 30, 22, 21, 14, 17, 28, 26, 24, 6, 8, 15]
After function is called [10, 12, 18, 20, 15, 14, 17, 15]
```

## Part B (*)

**arr_2.php** contains a form that gets 10 integer inputs from the user. It should then display the minimum, maximum and median of all numbers entered.

> Note: The median is the middle of list of numbers. For example, median of numbers 12, 4, 5 is 5. In case of odd amount of numbers, the median is the exact middle number of numbers when arranged sorted. In case of  even amount of numbers, we would get a pair of middle numbers. The median is half way between them. As an example, median of numbers 6, 12, 4, 10 is 8 (6 + 10) / 2 because when placed in order the middle numbers would be 6 and 10.

Hint: explore `sort()`

Here is a sample run:

|Before   |After    |
|---------|---------|
|![fn1](https://i.imgur.com/stkE9kX.png) |![fn2](https://i.imgur.com/G7MXqwy.png)|

## Part C

In **arr_3.php** write a function called `count_numbers` that takes in a multidimensional array, say $numbers, containing numbers and arrays that contain numbers. It returns the count of numbers in the array $numbers. Note that your function has to cater to the possibility of $numbers having an array of numbers. You can assume that it is at the most a 2-dimensional array.

Hint: explore `is_array()`

Here are some examples:

```text
$numbers = [4,6,[1,2],10,[-1,-3]];
Count of numbers:7
$numbers = [4, 6, [1,2,3,4], 10, [-1,-3], [5,7,1,2]];
Count of numbers:13
```
