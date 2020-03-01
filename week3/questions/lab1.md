# Lab 1: Variables

Learning Outcomes:

- > Solve very simple arithmetic problems by using variables referring values of different type

- > Get familiar with string concatenation

- > Get familiar with using print and input built-in functions

## Part A

Write a program in a file named **lab1_1.php** that computes and prints out the area and circumference of a circle of a given radius. The radius could be set to an int or float value. You can set the value of π to **3.14**

**Note**: Declare π using a constant with name PI with all capitalized
letters to indicate that the value is not to be changed in the code
after the initial assignment.

Formulas:

- > Area of circle = π \* radius<sup>2</sup>

- > Circumference of circle = π \* 2 \* radius

Here is a sample output when **lab1_1** is run (if radius is set to
**4.0**):

```text
Area of circle of radius 4 cm is 50.24 sq cm
Circumference of circle of radius 4 cm is 25.12 cm
```

## Part B

Your weight is actually the amount of gravitational attraction exerted on you by the Earth. On different planets, your weighing scales will show different figures depending on the gravitational force of that planet.

Write a program in a file named **lab1_2.php** that defines a variable to store your weight on Earth. The program then computes and outputs your weight on Mercury, Venus, Jupiter and Saturn. Use this conversion table:

| **Planet** | **Multiply the Earth Weight by** |
| ---------- | -------------------------------- |
| Mercury    | 0.4                              |
| Venus      | 0.9                              |
| Jupiter    | 2.5                              |

Here is a sample output of the program (if your weight on Earth is set to **60**):

```text
Your weight on Earth is 60 kg
Your weight on Mercury is 24 kg
Your weight on Venus is 54 kg
Your weight on Jupiter is 150 kg
```

### Part C

In the code given below, complete code that circularly shifts the values of 4 variables a, b, c and d. You are NOT supposed to make use of more than one new variable to accomplish the task. For example, if the variable values (of a, b, c and d) are initially 11, 21, 31 and 41 respectively, then the final values (of a, b, c and d) are 41, 11, 21, and 31 respectively.

Note: you should not hard code the answer, which means that for any value set to variables a, b, c and d, the code written should work without any change.

```php
<?php
  $a = 11;
  $b = 21;
  $c = 31;
  $d = 41;
  echo "before rotation: a = $a, b = $b, c = $c, d = $d";

  # write your code here



  echo "after rotation: a = $a, b = $b, c = $c, d = $d";
?>
```

Here is the output of **lab1_4.php**:

```text
before rotation: a = 11, b = 21, c = 31, d = 41<
after rotation: a = 41, b = 11, c = 21, d = 31
```

### Part D

Write a program in a file named **lab1_5.php** that converts a
temperature reading in Fahrenheit (tempInF) to Celsius (tempInC). The
formula for conversion is:

(i) Get a value from **lab1\_5.html** for temperature in Fahrenheit.

(ii) Store the user input in tempInF, and print out the corresponding temperature in Celsius.

Here is **lab1_5.htm**l:

```html
<!DOCTYPE html>
<html>
  <body>
  <form action="lab1_5.php">
    Temperature in Fahrenheit:
    <input type="text" name="tempInF">
    <input type="submit"/>
  </form>
</body>
</html>
```

Here is a sample output when **lab1\_5** is executed (with tempInF =
100.2):

```text
100.2 F = 37.888888888889 C
```

## Part E

Interest on credit card outstanding amount can be quite high. Some credit card companies compute interest on an *average daily balance*. The credit card issuer determines your average daily balance for the month by multiplying the balance you owe by the number of days you carried it, and dividing by the total number of days in the month. Here is an algorithm for computing the average daily balance and the monthly interest charge on a credit card.

> Step 1: Multiply the net balance shown on the credit card statement by the number of days in the billing cycle (i.e. number of days in the month). This is what needs to be paid.
>
> Step 2: Multiply the net payment received by the number of days the payment was received before the statement date. The statement date is always the last day of the billing cycle. Therefore, if payment was received on day 5 of the billing cycle, this converts to 31-5, or 26 days before the statement date. This is what has been paid.
>
> Step 3: Subtract the result of the calculation in step 2 from the result of the calculation in step 1.
>
> Step 4: Divide the result of step 3 by the number of days in the billing cycle. This value is the average daily balance.
>
> Step 5: Compute the interest charge for the billing period by multiplying the average daily balance by the monthly interest rate.

Here is an example. Assume the billing cycle for the month is 31 days and the monthly interest rate is 1.33%. The credit card statement shows a previous balance of $1,100.00. A payment of $650.00 was made on day 19 of the billing cycle (i.e. 12 days before the statement date). The calculation of the interest charge goes like this:

> Step 1: $1,100 x 31 = $34,100
>
> Step 2: $650 x 12 = $7,800
>
> Step 3: $34,100 - $7,800=$26,300
>
> Step 4: Average daily balance: $26,300 ÷ 31 = $848.39
>
> Step 5: Interest charge: $848.39 x 0.0133 = $11.28

Write a program called **lab1_6.php** that computes the monthly
interest charged on a credit card account.

Your program must get inputs from **lab1_6.html** for the following:

- previous balance
- payment amount
- day of the billing cycle on which payment was made
- monthly interest rate

You can assume that the number of days in the billing cycle to be **31** (regardless of the month for simplicity). Choose meaningful variable names to store the values.

```html
<!DOCTYPE html>
<html>
  <body>
    <form action="lab1_6.php">
      Enter previous balance:
      <input type="text" name="prev_balance"/>
      <br/>

      Enter paid amount:
      <input type="text" name="paid_amount"/>
      <br/>

      Enter day of payment made:
      <input type="text" name="day_payment_made"/>
      <br/>

      Enter interest rate:
      <input type="text" name="interest_rate"/>
      <br/>

      <input type="submit"/>
    </form>
  </body>
</html>
```

Here is a sample output for examples given earlier:

```text
Previous balance is $1100
Payment of $650 was made on day 19 of the billing cycle
Interest on outstanding amount is $11.283548387097
```
