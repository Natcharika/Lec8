<?php
    $person = array("fullname" => "John", "height" => "173", "age" => "43");

    foreach ($person as $key => $value){
        echo $key . " = " . $value . "<br>";
    }
    print_r($person); //แสดงค่าทั้งหมดในอาร์เรย์
    //ใช้แม็ก <pre> ช่วยให้แสดงผลได้เข้าใจมากขึ้น
    echo "<pre>";
    print_r($person);
    echo "</pre>"
?>