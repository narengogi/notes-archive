<!DOCTYPE html>
<html lang="en">
<!-- dynamically generates a table of links  -->

<?php 

$course = $_SERVER['QUERY_STRING'];
include 'list_files.php';



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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

<h1>IITP Notes Archive</h1>
  <table>
   <tr><th><a href="?C=N;O=D">Name</a></th><th><a href="?C=S;O=A">Size</a></th><th><a href="?C=D;O=A">Description</a></th></tr>
   <tr><th colspan="5"><hr></th></tr>
<tr><td valign="top"><img src="/icons/back.gif" alt="[PARENTDIR]"></td><td><a href="/">Parent Directory</a>       </td><td>&nbsp;</td><td align="right">  - </td><td>&nbsp;</td></tr><tr><th colspan="5"><hr></th></tr>
<?php echo $list; ?>


</table>

    <ul id="files"> <?php echo $uploaded_files; ?> </ul>


    <div id="container">
        <h3>Upload your notes and slides here</h3>
         
        <fieldset>
            <legend>MAX_FILE_SIZE=20Mb</legend>

            <form method="post" action= "upload.php" enctype="multipart/form-data">

            <input type="hidden" name="course_name" value="<?php echo $course ; ?>" />
            <input type="hidden" name="maxfilesize" value="21000000" />
            <p><label for="name">Select file</label><br />
            <input type="file" name="file"/></p>

            <p><input type="submit" name="submit" value="Start upload" /></p>
            </form>   
        </fieldset>
    </div>


    <footer class="footer">Produced by <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Naren Nath</a> and <a href="www.facebook.com">Sujeeth</a></footer>

</body>


</html> 