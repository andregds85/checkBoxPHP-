
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
   <input type="checkbox" name="grupo_chk[]" value="1">
   <input type="checkbox" name="grupo_chk[]" value="2">
   <input type="checkbox" name="grupo_chk[]" value="3">
   <input type="checkbox" name="grupo_chk[]" value="4">
   <br>
   <br>
   <input type="submit" name="Enviar" value="Submit">
</form>
<?php
print_r($_POST['grupo_chk']);
?>
