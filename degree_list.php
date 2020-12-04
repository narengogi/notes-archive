<!-- This script fetches the degrees (the page isn't actually necessary,
but I made it for generalisability) -->

<?php 

include('connect.php');

$list = "" ;
$query = "SELECT DISTINCT degree FROM directory ORDER BY degree ;";

$data = mysqli_query($conn, $query);

// echo $_SERVER['PHP_SELF'];


while ($element = mysqli_fetch_array($data) ) {
    
    $link = "batch.php?" . $element['degree'] ;
    $elementa = $element['degree'] ;
    // $list .= "<li><a href=\"$elementa\">$elementa</a></li>\n";
    // $site = ;
    
    $list .= "<tr><td valign=\"top\"><img src=\"/icons/folder.gif\" alt=\"[DIR]\"></td><td><a href=\"$link\">$elementa/</a></td><td align=\"right\"></td><td align=\"right\">  - </td><td>&nbsp;</td></tr>\n";
}



?> 