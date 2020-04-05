# PHP

## Functions

- ctype_digit($char)
    > Returns TRUE if $char is a decimal digit
- rand($min, $max)
    > Returns random int between $min and $max (inclusive)
- is_numeric($var)

- count($array)
- array_keys($array)
    > Returns keys in an associative array
- array_key_exists($key, $array)
- in_array($obj, $array)
    > Return True or False
- array_search($obj, $array)
    > Returns index or False

- strtoupper
- str_replace($old, $new, $string)
    > Replace $old substring to $new substring
- strlen($string)
- substr($string, $start, $len)
- explode($seperator, $string, $limit (optional))

- issest($var1, $var2 (optional), ...)
    > Check if there is any value set
- empty($var)
    > Returns true if there is no value
- print_r($var)
- var_dump($var)

## PDO

```php
// STEP 1: Connect to database
$dsn = "mysql:host=localhost;dbname=week10;port=3306";
$pdo = new PDO($dsn, "username", "password");

// Do stuff
$isbn = 'isbn1'

// STEP 2: Prepare SQL statement
$sql = "SELECT * FROM book WHERE isbn = :isbn";
$stmt = $pdo->prepare($sql);

// Bind Parameters (if necessary)
$stmt->bindParam(":isbn", $isbn, PDO::PARAM_STR);

// STEP 3: Execute SQL statement
// $stmt->execute() will return a boolean on success
$stmt->execute();

// STEP 4: Retrieve results row by row
// Ignore if INSERT or UPDATE or DELETE
// since it dosen't return anything
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while ($row = $stmt->fetch) {
    // do something
}

// STEP 5: Free up resources
$stmt = null;
$pdo = null;

```

### PDO Class Constants

|Constants           |Description                       |
|--------------------|----------------------------------|
|PDO::PARAM_BOOL  |Represents a boolean data type       |
|PDO::PARAM_NULL  |Represents a SQL NULL data type      |
|PDO::PARAM_INT   |Represents a SQL INTEGER data type   |
|PDO::PARAM_STR   |Represents a SQL CHAR or VARCHAR data type|
|PDO::PARAM_LOB   |Represents a SQL large object data type|

## Automatic Redirect

```php
header("Location login.html");
exit;
```

## Session

```php
session_start();

$_SESSION['name'] = "Bob";


// Clear session
$_SESSION = [];
unset($_SESSION['name']);
```

## Password Hashing

```php
// To encrypt
// PASSWORD_DEFAULT is an algorithm used for hashing
$hashed = password_hash($password, PASSWORD_DEFAULT);

// To verify
// Function will compare $password string and $hashed to see if it matches
// @returns a boolean
$status = password_verify($password, $hashed);
```
