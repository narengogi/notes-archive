<?php
include('connect.php');




   if(isset($_POST['submit']))
      {
         $maxfilesize = $_POST['maxfilesize'];
         $filename = $_FILES['file']['name'];
         $filetemplocation = $_FILES['file']['tmp_name'];
         $filesize = $_FILES['file']['size'];
         $fileerror = $_FILES['file']['error'];
         $fileext = $_FILES['file']['type'];
         $course = $_POST['course_name'];
         
      
         if ($fileerror === 0 && $filesize < $maxfilesize){

            $uploadname = rand(1,10) . '_' . basename($filename);
            $filenewname = uniqid('', true) . "." . $fileext;
            $filedestination =  'uploads/' . $uploadname;
            move_uploaded_file($filetemplocation, $filedestination);

            

            $query = "INSERT INTO directory (`id`, `files`, `course`, `batch`, `degree`) VALUES (NULL, '$uploadname', '$course', '', '');";
            $query1 = $query;
            mysqli_query($conn, $query1);
            
            $message = "Your file has been uploaded";
            echo "<script type='text/javascript'>alert('$message');</script>";
         }  
         else {
            echo("Some Error maybe") ;
         }
      }
   else{
      echo "File size too big man" ;
   }

       
?>