<html>
    <body>
    <?php
        if (count($_GET) == 0) {
            echo "  <form>
                        Sales amount:
                        <input type='text' name='sales_amt'/>
                        <input type='submit'/>
                    </form>";
        }
        else{
            $sales_amt = $_GET["sales_amt"];
            # Write code here
            $monthly_base = 2000;

            # max commision employee can receive
            $commision = 18;

            # if sales is lower than max, update with ifelse
            if ($sales_amt < 10000) {
                $commision = 5;
            } elseif ($sales_amt < 15000) {
                $commision = 10;
            } elseif ($sales_amt < 18000) {
                $commision = 15;
            }

            $final_pay = $monthly_base + (($commision/100) * $sales_amt);

            echo("Entered monthly sales amount($): $sales_amt <br>");
            echo("Commision rate for the sale of sales amount $sales_amt is $commision% <br>");
            echo("The monthly pay for the salesperson is $$final_pay");


            # End of code
        }
    ?>
    </body>
</html>