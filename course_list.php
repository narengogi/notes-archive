<!-- This script fetches the courses (ce320, ce101, etc.) -->

<?php 

include('connect.php');


$query = "SELECT DISTINCT course FROM directory WHERE batch = '$batch' ORDER BY course ;";

$query1 = $query;

$data = mysqli_query($conn, $query1);

// echo $_SERVER['PHP_SELF'];


while ($element = mysqli_fetch_array($data) ) {

    $link = "course_page.php?" . $element['course'] ;
    $elementa = $element['course'] ;
    // $list .= "<li><a href=\"$elementa\">$elementa</a></li>\n";
    // $site = ;
    
    $list .= "<tr><td valign=\"top\"><img src=\"/icons/folder.gif\" alt=\"[DIR]\"></td><td><a href=\"$link\">$elementa/</a></td><td align=\"right\"></td><td align=\"right\">  - </td><td>&nbsp;</td></tr>\n";
}



?> 