<html>
<body>
<?php
    //$_GET = array("country" => "thailand", "lang" => "thai");
    $country = $_GET["country"];
    $language = $_GET["lang"];
    echo "You are from " . $country . ".<br>";
    echo "You preferred " . $language . " language.";
?>
</body>
</html>