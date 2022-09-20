<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="file" name="tax">
<input type="submit" name="sub">

</form>

</body>
</html>

 <?php
    if(isset($_POST['sub'])){

 
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $_FILES['tax']['tmp_name']);
    $ok = false;
    switch ($mime) {
        case 'image/gif':
        break;
        case 'application/pdf':
            echo "<script>alert('pdf');</script>";

        break;
        case 'image/jpeg':
            echo "<script>alert('jpeg');</script>";
        break;
        default:
            die("Unknown/not permitted file type");
        break;
    }
  }
?>