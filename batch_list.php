<!-- This script fetches the batches (Civil Engineering, Electrical, etc.) -->

<?php 

include('connect.php');


$query = "SELECT DISTINCT batch FROM directory WHERE degree = '$degree' ORDER BY batch ;";

$query1 = $query;

$data = mysqli_query($conn, $query1);

// echo $_SERVER['PHP_SELF'];


while ($element = mysqli_fetch_array($data) ) {

    $link = "course.php?" . $element['batch'] ;
    $elementa = $element['batch'] ;
    // $list .= "<li><a href=\"$elementa\">$elementa</a></li>\n";
    // $site = ;
    
    $list .= "<tr><td valign=\"top\"><img src=\"/icons/folder.gif\" alt=\"[DIR]\"></td><td><a href=\"$link\">$elementa/</a></td><td align=\"right\"></td><td align=\"right\">  - </td><td>&nbsp;</td></tr>\n";
}



?> 