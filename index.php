<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" 
          media="screen" />
    <title>LocalFiddle</title>
  </head>
  <body>
    <header>
      LocalFiddle
    </header>
    
    <div id="editpanel">
      <form action="assemble.php" method="post" target="resultframe">
        <fieldset>
          <div class="controls">
            <input type="submit" value="Run" />
            <input type="button" id="clear" value="Clear all" />
          </div>
          <div id="inputs">
            <label for="jsinput">JavaScript:</label>
            <textarea name="js" id="jsinput"></textarea>
            <label for="htmlinput">HTML:</label>
            <textarea name="html" id="htmlinput"></textarea>
            <label for="cssinput">CSS:</label>
            <textarea name="css" id="cssinput"></textarea>          
          </div>          
        </fieldset>  
      </form>
    </div>    
    
    <div id="resultpanel">
      <iframe id="resultframe" name="resultframe" src="assemble.php"></iframe>
    </div>
    <script type="text/javascript" src="assets/js/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
