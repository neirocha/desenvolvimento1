<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>A Simple Page with CKEditor</title>
    <!-- Make sure the path to CKEditor is correct. -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form action="update.php" method="post">
            <textarea name="texto" id="editor1" rows="10" cols="80">
          
              <?php
			
			echo $_GET['texto'];
			
			?>
            </textarea>
            <input type="hidden" name="id_pagina" value="<?php echo $_GET['id']; ?>">
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
    <input type="submit" value="Atualizar">
</form>
</body>
</html>