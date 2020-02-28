<?php

// list of valid categories;  more categories may be added in the future!
$categories = [ 'love', 'life', 'friend'];

// 1. initialize variables
$quote = '';


// 2.  process
include_once 'WiseMan.php';

// print_r($_POST);

if (isset($_POST['category'])) {
    $category = $_POST['category'];
    $wiseman = new WiseMan($category);
    $quote = $wiseman->getQuote();
} 

// If category is not set, use the hidden input instead
elseif (isset($_POST['hidden_quote'])) {
    $quote = $_POST['hidden_quote'];
    $category = $_POST['hidden_category'];
}

// 3. display
?>
<html>
<body>
    <form method="post">
        Category: 
        <?php
            foreach ($categories as $item) {

                if (isset($category) && $category == $item) {
                    echo "
                        <input type='radio' name='category' id='category_$item' value='$item' checked/>
                        <label for='category_$item'> $item </label>
                    ";
                } else {

                    echo "
                        <input type='radio' name='category' id='category_$item' value='$item' />
                        <label for='category_$item'> $item </label>
                    ";
                }
            }
        ?>
        <input type='submit' value='Get quote' />
    </form>

    <h1> <?=$quote ?> </h1>

    <?php
        // If quote is chosen, show additional buttons and hidden inputs
        if (!empty($quote)) {
            echo ("
                <form method='post'>
                <input type='hidden' name='hidden_quote' value='$quote'>
                <input type='hidden' name='hidden_category' value='$category'>
                <input type='submit' value='Like' name='action[]' />
                <input type='submit' value='Haha' name='action[]' />
                <input type='checkbox' value='Bookmark' name='action[]' id='bookmark'/>
                <label for='bookmark'> Bookmark </label>
                </form>
            ");
        }

        // If you click the like or haha, show your msg
        if(isset($_POST['action'])) {

            $msg = '';

            foreach($_POST['action'] as $action) {
                if ($action === "Like") { $msg .= "You like it! "; }

                if ($action === 'Haha') { $msg .= "You find it funny. "; }

                if ($action === 'Bookmark') { $msg .= "Bookmarked!"; }
            }

            echo("$msg");
        }
    ?>


</body>
</html>