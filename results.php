<?php 
// Initializing variables for sum and numbers
$sum = 0;
$numbers = "";
$numberType = $_POST["number-type"];
$minValue = intval($_POST["min-value"]);
$maxValue = intval($_POST["max-value"]);


// Check if no option is selected or if the values are empty strings
if ($numberType === "unselected" || $numberType === "" || $numberType === null || $minValue === "" || $maxValue === "" || $minValue === null) {
    echo "Please enter all of your responses.";
    return;
}

// If the user does not enter valid integers, display error messages
else if ($minValue > $maxValue) {
    echo "Please enter a valid range with the minimum value being less than  the maximum value.";
    return;
}


// Loop through numbers from the minimum to the maximum value
if ($numberType === "even") {
    for ($counter = $minValue; $counter <= $maxValue; $counter++) {
        if ($counter % 2 === 0) {
            // Add the current number to the sum
            $sum += $counter;

            // Adding the current number to the string of numbers
            if ($numbers !== "") {
                $numbers .= " + ";
            }
            $numbers .= $counter;
        }
    }
} elseif ($numberType === "odd") {
    $counter = $minValue;
    while ($counter <= $maxValue) {
        if ($counter % 2 !== 0) {
            // Add the current number to the sum
            $sum += $counter;

            // Adding the current number to the string of numbers
            if ($numbers !== "") {
                $numbers .= " + ";
            }
            $numbers .= $counter;
        }
        $counter++;
    }
}

// Display the result with the sum and the numbers used
echo "The sum of all " . $numberType . " numbers from " . $minValue . " to " . $maxValue . " (" . $numbers . ") is " . $sum . ".";
?>