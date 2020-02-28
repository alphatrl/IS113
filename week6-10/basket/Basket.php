<?php
/* 
1.  Do NOT change the existing code.
2.  Do NOT add attributes to this class.
3.  Read TestBasket.php and ADD the missing methods after line 40.
*/
class Basket {

    // ATTRIBUTES
    // name of this basket
    private $name; 

    // associative array where key is item (String) and value is quantity (int)
    private $itemQtyArr; 
    
    // CONSTRUCTOR
    public function __construct($name) {
        $this->name = $name;
        $this->itemQtyArr = [];
    } 

    // METHODS
    public function getSummary() {
        $summary = "Basket '$this->name' [ ";

        if ( count($this->itemQtyArr) == 0 ) {
            $summary .= 'nothing.';
        } else {
            foreach ( $this->itemQtyArr as $item => $qty ) {
                $summary .= "$qty $item, ";
            }

        }
        $summary .= ']';

        return $summary;
    } // end function getSummary

    // ADD MISSING METHODS HERE
    
    // Get number of $fruit in the basket
    public function get($fruit) {
        // If key exist, chaneg $qty to whatever is in array

        $qty = 0;

        if (array_key_exists($fruit, $this->itemQtyArr)) {
            $qty = $this->itemQtyArr[$fruit];
        }

        return $qty;
    }

    // Add a $fruit to the basket
    public function add($fruit) {
        
        // We get the number of $fruit in the basket
        // +1 to qty
        // Update value in basket

        $qty = $this->get($fruit);
        $this->itemQtyArr[$fruit] = $qty + 1;
    }

    // Remove a $fruit from the basket
    public function remove($fruit) {
        // We get the number of $fruit in the basket
        // -1 to qty
        // Update value in basket

        $qty = $this->get($fruit);
        $this->itemQtyArr[$fruit] = $qty - 1;
    }
    


} // end class Basket