<?php
    $list1 = ["John"=>12, "Kate"=>15, "Henry"=>35];
    $list2 = ["Mike"=>18, "Scott"=>20, "Joseph"=>48, "Larry"=>54];
    echo "Output:";
    var_dump(merge($list1,$list2));

    echo("<br>");
    
    $list4 = ["John"=>12, "Kate"=>15, "Mike"=>18, "Scott"=>20, "Henry"=>35, "Joseph"=>48, "Larry"=>54];
    echo "Correct answer:";
    var_dump($list4);

    function merge($list1,$list2){
        # Write code here
        $list_sorted = array();
        $compare_index = 0;

        if (count($list1) > count($list2)) {
            $list_main = $list1;
            $list_compare = $list2;
        }
        else {
            $list_main = $list2;
            $list_compare = $list1;
        }

        // compare the bigger array against the smaller array
        foreach($list_main as $main_name => $main_age) {

            // if the age is smaller or equal to $main_age, add to $list_compare first
            foreach($list_compare as $name => $age) {
                if ($age <= $main_age) {
                    $list_sorted[$name] = $age;
                }
            }

            $list_sorted[$main_name] = $main_age;
        }

        return $list_sorted;
        # End of code
    }
?>
