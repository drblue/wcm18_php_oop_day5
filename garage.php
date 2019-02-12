<?php

require("includes/Garage.php");

// create Neversvägen garage
$neversvagen = new Garage(24);

// occupy a few of the lots

/*
echo "Trying to park in spot 1.. ";
$result = $neversvagen->park(1);
if ($result) {
	echo "🤘💪🏻🕺🏻";
} else {
	echo "😰";
}
*/

$rented_lots = [1, 2, 4, 8, 16, 8];
foreach ($rented_lots as $rented_lot) {
	echo "Trying to park in spot {$rented_lot}.. ";

	$result = $neversvagen->park($rented_lot);
	if ($result) {
		echo "🤘💪🏻🕺🏻";
	} else {
		echo "😰";
	}
	echo "<br>";
}

?>

<h1>My Little Parking Garage</h1>

<?php

// get total number of lots in the Neversvägen garage
$total_lots = $neversvagen->getNumberOfLots(); // 18

// display all parking lots's statuses
for ($i = 1; $i <= $total_lots; $i++) {
	echo "Parking spot {$i}: ";
	if ($neversvagen->isOccupied($i)) {
		echo "<span style='color: red;'>UPPTAGEN</span>";
	} else if ($neversvagen->isFree($i)) {
		echo "<span style='color: green;'>ledig</span>";
	} else {
		echo "N/A";
	}
	echo "<br />";
}
