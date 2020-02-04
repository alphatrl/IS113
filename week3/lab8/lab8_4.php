<?php
$dict1 = reverse_dict(["a"=>[1,2,3], "b"=>[1,2], "c"=>[3,4], "d"=>[5,6]]);
$student_subjects  =  reverse_dict(["Jane"=>["Economics","Physics","Chemistry"], "Mark"=>["Literature","Chemistry","Biology"], "Sarah"=>["Literature","Physics","Chemistry"]]);
 
var_dump($dict1);
var_dump($student_subjects);

function reverse_dict($dict){
    # Write code here
    $reverse_dict = array();

    foreach($dict as $key => $value) {
        
        foreach ($value as $item) {
           // if $new_key exists in $reverse_dict
           // get the array inside it
           // append new value to it
           // update the $key and $value

            if(isset($reverse_dict[$item])) { $value_array = $reverse_dict[$item]; }
            else { $value_array = array(); }

            $value_array[] = $key;
            $reverse_dict[$item] = $value_array;
        }
    }

    return $reverse_dict;
    # End of code
}

?>
