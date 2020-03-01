# Lab 3: Strings

Learning Outcomes:

- > Understand how to use string methods by passing appropriate values
    > to the methods

- > Get to solve problems involving string objects

## Part A

Edit **str_1.php** that contains a form requesting the user’s name and gender so that it displays back with the surname in capital letters and the rest of the name with first letter in uppercase. **str_1.php** should also add the prefix Mr. or Ms. to the name based on the user
input for gender. Assume the following:

- > The given name could be one word, or more

- > Two adjacent words of the name is separated by 1 space

- > If the name has 2 words, the second word is the surname

- > If the name has more than 2 words, the first word is always the surname

Note: Take into consideration all possibilities of names before you start writing your code. Make use of **if-else** effectively i.e. avoid redundant use of **if-else** structure.

Hint: explore string functions `explode()`, `ucfirst()`, `strtoupper()`

|Below are some sample runs:|    |
|---------------------------|----|
|![tanweekiat_before](https://i.imgur.com/g1eU7vm.png)|![tanweekiat_after](https://i.imgur.com/ePqJHox.png)|
|![sun_before](https://i.imgur.com/dA0e9BY.png) | ![sun_after](https://i.imgur.com/l9ENPfA.png) |
|![hazirah_before](https://i.imgur.com/2wnr9B0.png) | ![hazirah_after](https://i.imgur.com/S2fl1d1.png)|

## Part B

Write a program in a file named **str_2.php** that contains a form requesting a line of input containing an email address. **str_2.php** then displays the *first* email address contained in that line of input.

**Assumptions:**

- An email address embedded in an input line will be surrounded by an empty space at both ends.

- Each line of input will always contain at least one email address.

For example, given the input “Email: contact_us@smu.edu.sg” as shown below, the program will extract “contact_us@smu.edu.sg” and display it.

Below are three sample runs:
|Before       | After        |
|-------------|--------------|
|![contact_before_1](https://i.imgur.com/9SBRHbj.png)| ![contact_after_1](https://i.imgur.com/6ktcYlh.png)|
|![double_email_before](https://i.imgur.com/j9eL66T.png)|![double_email_after](https://i.imgur.com/E9xjE3x.png)|
|![contact_before_3](https://i.imgur.com/uvAvGpJ.png)|![contact_after_3](https://i.imgur.com/6ktcYlh.png)|

**Hint**: `explore`, `explode()`, `strpos()`

![Help](https://i.imgur.com/1DZzv2l.png)

In order to extract the first email address in the input line, you will need to locate the boundary of the email address by obtaining the index numbers of the `start_index` and the `end_index`. How can you find these two index numbers? If you think carefully, you will see that `start_index` marks the last space before the symbol ‘@’ while `end_index` marks the first space after the symbol ‘@’. Let us refer to the index of ‘@’ as `symbol_index`. Look for functions in the String module to find indices of `start_index`, `end_index` and `symbol_index`

A special scenario is when the email address is either at the very beginning or at the very end of the input line (or both). In this case, there may not be a space before (or after) the email address. To work around this, you can first concatenate a space to both ends of the input line. Thus, if the input line is “xyz@smu.edu.sg”, it becomes “ xyz@smu.edu.sg ”.

## Part C

**str_3.php** contains a form that asks the user to enter a string, say text, and two characters, say start and end. Edit **str_3.php** that searches for a substring in text such that the substring begins with the character start and ends with the character end. If there is no such substring, display the message "No such substring".

Hint: explore `substr()` and `strpos()`

Sample runs of **str_3.php** are shown below:

|Before           | After                  |
|-----------------|------------------------|
|![before_1](https://i.imgur.com/ULNyjEJ.png) | ![after_1](https://i.imgur.com/TCcoTiK.png)|
|![before_2](https://i.imgur.com/bZcAl1s.png) | ![after_2](https://i.imgur.com/y1WwvaQ.png)|
|![before_3](https://i.imgur.com/surBqLC.png) | ![after_3](https://i.imgur.com/kLhm85m.png)|

## Part D (**)

A palindrome is a string that reads the same forward or reverse. **str_4.php** contains a form that requests the user to enter a string. Edit **str_4.php** so that it displays the message “The string <*input string*> is a palindrome” if the input string is a palindrome, else print the message “The string <*input string*> is not a palindrome”. **str_4.php** should ignore digits, empty spaces or any special characters in the input string when evaluating for a palindrome.

Hint: explore `preg_replace()`

Sample runs of **str_4.php** are shown below:

| Before                           | After                       |
|----------------------------------|-----------------------------|
| ![before_1](https://i.imgur.com/OLoUi9a.png) | ![after_1](https://i.imgur.com/68GnUv9.png) |
| ![before_2](https://i.imgur.com/SigDwCP.png) | ![after_2](https://i.imgur.com/ZcWrFnr.png) |
| ![before_3](https://i.imgur.com/FXp9Mlr.png) | ![after_3](https://i.imgur.com/3RfKLsl.png) |

## Part E

**str_5.php** contains a form that asks the user to enter two strings. Let us call the first string str1 and the second string str2. Edit **str_5.php** such that it displays "Bingo!" if every character in str1 also appears in str2. Otherwise, it displays "Nope :( "

Hint: explore `strlen()`, `strpos()`

Some sample runs of **str_5.php** are shown below:

| Before                   | After                    |
|--------------------------|--------------------------|
|![before_1](https://i.imgur.com/OjPs756.png)  | ![after_1](https://i.imgur.com/bF0xcos.png)|
|![before_2](https://i.imgur.com/ZYKr3Tm.png) | ![after_2](https://i.imgur.com/Z1Bl8fA.png)|
|![before_3](https://i.imgur.com/5ntKeAw.png) | ![after_3](https://i.imgur.com/JMF5F5S.png)|
