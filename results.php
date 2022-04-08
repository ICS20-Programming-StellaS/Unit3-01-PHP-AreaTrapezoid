<?php
	// get the hours and hourly rate from text field
	$SideA = $_POST['sideA'];
	$SideB = $_POST['sideB'];
  $Height = $_POST['height'];
?>
<?php
	// calculate the area and perimeter
	$area = ($SideA + $SideB) * $Height/2;
  $area = number_format($area, 2);
?>

<h3>Results:</h3>
The area is <?php echo "$area" ?> cm<sup>2</sup>.
</div>