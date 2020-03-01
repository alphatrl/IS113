# Question 12 - HTML Form

## Part A

Write the relevant codes to generate HTML elements dynamically based on the following logic. The `$numUsers` field will determine the number of users that we would need to capture in the form. For each user, the following HTML controls should be generated.

E.g. if the value of `$numUsers` is 2, the output should be:

![f1](https://i.imgur.com/cQYTMiF.png)

```php
<!DOCTYPE html>
<html>
<body>
<form>
<?php
    $numUsers = 2;
    //write your codes here, change the value of the $numUsers to test
?>
</form>
</body>
</html>
```

## Part B (*)

Add in the relevant attributes for the password HTML elements such that the user can only key in a maximum of 12 characters.

For every alternate user (e.g. 2nd, 4th, 6th .. user), add another field to capture the age

![f2](https://i.imgur.com/blfG5TQ.png)
