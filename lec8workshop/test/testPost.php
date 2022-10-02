<html>
<body>
<?php
    //$_POST = array("country" => "thailand", "lang" => "thai");
    $country = $_POST["country"];
    $language = $_POST["lang"];
    echo "You are from " . $country . ".<br>";
    echo "You preferred " . $language . " language.";
?>
</body>
</html>