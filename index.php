<?php session_start(); ?>
<?php
$_SESSION["first_name"] = "Margit";
$_SESSION["last_name"] = "Pilden";
$_SESSION["email"] = "margit.pilden@khk.ee";
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>2. periood-9-praktikum</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <pre><?php print_r($_SESSION);
        $first_name = $_SESSION["first_name"];
        echo $first_name;
        ?></pre>
</body>
</html>