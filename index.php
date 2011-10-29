<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" 
          media="screen" />
    <title>Mini JSFiddle</title>
  </head>
  <body>
    <header>
      Mini JS Fiddle
    </header>
    
    <div id="editpanel">
      <form action="assemble.php" method="post" target="resultframe">
        <fieldset>
          <div class="controls">
            <input type="submit" value="Run" />
            <input type="button" value="Clear all" onclick="MJF.clearAll();" />
          </div>
          <div id="inputs">
            <label for="jsinput">JS:</label>
            <textarea name="js" id="jsinput"></textarea>
            <label for="htmlinput">HTML:</label>
            <textarea name="html" id="htmlinput"></textarea>
            <label for="cssinput">CSS:</label>
            <textarea name="css" id="cssinput"></textarea>          
          </div>
          <div class="controls">
            
          </div>
        </fieldset>  
      </form>
    </div>    
    
    <div id="resultpanel">
      <iframe id="resultframe" name="resultframe" src="assemble.php"></iframe>
    </div>
    <script type="text/javascript" src="assets/js/main.js"></script>
  </body>
</html>
