<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <style type="text/css">
      <?php
        if(isset($_POST['css'])) 
        {
          echo $_POST['css'];
        }
      ?>
    </style>
    
  </head>
  <body>
    <?php
      if(isset($_POST['html']))
      {
        echo $_POST['html'];
      }
    ?>
    <script type="text/javascript">
     // <[CDATA[ 
     <?php
      if(isset($_POST['js'])) 
      {
        echo $_POST['js'];
      }
     ?>
     // ]]>
     </script>
  </body>
</html>
