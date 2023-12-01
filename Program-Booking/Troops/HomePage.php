<?php
include("../Connection/Connection.php");
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form"  align="center">
<body>
<?php include("Template/Mid.php") ?>
</body>
</div>
<?php include("Template/Footer.php") ?>
</html>