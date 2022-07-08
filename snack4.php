<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array
non dovrà contenere lo stesso numero più di una volta -->

<?php
$random=array();
for($i=0; $i<15; $i++)
{
$random[]=rand(0,100)."<br />";
}
print_r($random);
?>