<?php

echo "<select>";

for ($i=date("Y") ; $i >= 2003; $i--) { 
	
	echo $i . "<br>";

	echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "<select>";

?>