<!-- This script fetches the files (ce320, ce101, etc.) -->

<?php 

include('connect.php');


$query = "SELECT DISTINCT files FROM directory WHERE course = '$course' ORDER BY files";

$query1 = $query;

$data = mysqli_query($conn, $query1);

// echo $_SERVER['PHP_SELF'];


while ($element = mysqli_fetch_array($data) ) {

    $link = "/notesarchive/" . "uploads/" . $element['files'] ;
    $elementa = $element['files'] ;
    // $list .= "<li><a href=\"$elementa\">$elementa</a></li>\n";
    // $site = ;
    
    $list .= "<tr><td valign=\"top\"><img src=\"/icons/layout.gif\" alt=\"[DIR]\"></td><td><a href=\"$link\">$elementa/</a></td><td align=\"right\"></td><td align=\"right\">  - </td><td>&nbsp;</td></tr>\n";
}



?> 