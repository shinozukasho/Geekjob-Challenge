<HTML>
<head>
</head>
<body>
<form enctype="multipart/form-data" action="sample.php" method="post">
<input name="userfile" type="file" />
<input type="submit" value="sent">
</form>
</body>
</HTML>
<?php
var_dump($_FILES['userfile']);
$files_path = './files/' . $_FILES['userfile']['name'];
if (move_uploaded_file($_FILES['userfile']['tmp_name'],
    $files_path)) {
    echo file_get_contents($files_path);
}