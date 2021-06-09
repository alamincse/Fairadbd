<?php
  header('Content-Type: application/download');
  header('Content-Disposition: attachment; filename="Sample.mp3"');
  header("Content-Length: " . filesize("Sample.mp3"));
  $fp = fopen("Sample.mp3", "r");
  fpassthru($fp);
  fclose($fp);
?>
<!DOCTYPE html>
<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
       <form action="download.php" method="post">
           <input type="submit" name="submit" value="Download File" />
       </form>
   </body>
</html>