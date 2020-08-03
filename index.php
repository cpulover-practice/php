<?php
$name = "cpulover";
echo $name;

echo "<p> I am $name </p>";
echo " I am " . $name . "<br>"; // concentrate string

$variableName = "name";
//nested variable
echo $$variableName . "<br>"; //output = $name = "cpulover"

$myInfo = array("Hieu", "Ngo", "173");
$myInfo[] = true;
print_r($myInfo);
echo $myInfo[5];

$myInfo2 = array(
    "firstName" => "Hieu",
    "lastName" => "Ngo",
);
$myInfo2["age"] = 23;

echo "<br>";
print_r($myInfo2);
echo "<br>Array size: " . sizeof($myInfo2);

echo "<br>";
foreach ($myInfo2 as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
