<?php 
$inputArray = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9); // input arrays
$outputArray = array(); // empty array for storing duplicate values
$value = 9; // value to be searched the array
$found = false; // found status

// create the output array
foreach($inputArray as $inputArrayItem) {
    foreach($outputArray as $outputArrayItem) {
        if($inputArrayItem == $outputArrayItem) {
            continue 2;
        }
    }
    $outputArray[] = $inputArrayItem;
}

// print the input array
  print_r($outputArray);
  echo "<br/>";
  echo "<br/>";


// finding the the value is present in the output array or not
foreach($outputArray as $outputKey => $outputValue)
{
        // if the output value and the given is is same
        if($outputValue == $value)
        {   
            $found = true; // change found status to true
            echo "{$value} exists at {$outputKey} index"; // print message
            break; // break the loop
            
        }   
}

if(!$found){
    echo "Sorry! value not found";
}

?>
