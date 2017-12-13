<!DOCTYPE html>
<!--
#######################################################
#                 Multiple Select - TSI               #
#                                                     #
# Author: Vicente Catala                              #
# Date: 07/11/2017                                    #
#                                                     #
#######################################################
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Multiple select</title>
  <link href="fSelect.css" rel="stylesheet">
  <script src="jquery.min.js"></script>
  <script src="fSelect.js"></script>
  <script>
    (function($) {
        $(function() {
            $('.test').fSelect();
        });
    })(jQuery);
  </script>
</head>
<body>
  <form id="form" name="form" method="post" action="result.php">
    <select name="sel[]" class="test" multiple="multiple">
            <option value="mondeo">Mondeo</option>
            <option value="kuga">Kuga</option>
            <option value="connect">Connect</option>
            <option value="galaxy">Galaxy</option>
            <option value="smax">S-max</option>
    </select><br><br><br>
    <input type="submit" name="btnAceptar" id="btnAceptar" value="Aceptar" />
  </form>
</body>
</html>
