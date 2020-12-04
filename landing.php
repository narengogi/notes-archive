<!-- This is the landing page, and contains the 
list of degrees like B.Tech, M.Tech, etc. -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>

<!-- dynamically generates a table of links  -->

<?php include 'degree_list.php';

?>  

<head>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: orange;
  color: white;
  text-align: center;
}
</style>

  <title>Notes Archive</title>
 </head>
 <body>
<h1>IITP Notes Archive</h1>
  <table>
   <tr><th><a href="?C=N;O=D">Name</a></th><th><a href="?C=S;O=A">Size</a></th><th><a href="?C=D;O=A">Description</a></th></tr>
   <tr><th colspan="5"><hr></th></tr>
<tr><td valign="top"><img src="/icons/back.gif" alt="[PARENTDIR]"></td><td><a href="/">Parent Directory</a>       </td><td>&nbsp;</td><td align="right">  - </td><td>&nbsp;</td></tr><tr><th colspan="5"><hr></th></tr>
<?php echo $list; ?>


</table>
<br><br>
<footer class="footer">Produced by <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Naren Nath</a> and <a href="www.facebook.com">Vinnakota</a></footer>
</body></html>
