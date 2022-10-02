<html>
<body>
<?php
    
    $a = $_GET["a"];
    $b = $_GET["b"];
    $ans1 = $a + $b ;
    $ans2 = $a - $b ;
    $ans3 = $a * $b ;
    $ans4 = $a / $b ;
    echo "a+b = " . $ans1 . "<br>";
    echo "a-b = " . $ans2 . "<br>";
    echo "a*b = " . $ans3 . "<br>";
    echo "a/b = " . $ans4 . "<br>";
?>
</body>
</html>