<?php

function mijnFunction()
{
    return 1;
}
$mijnFunctionResultaat = mijnFunction();

print($mijnFunctionResultaat);

echo "<br>";

function returnVariable()
{
    $result = rand();
    return $result;
}
$returnVariableResultaat = returnVariable();
print($returnVariableResultaat);

echo "<br>";

function returnVariable2()
{
    $result = rand();
    return $result;
}
$returnVariableResultaat = returnVariable2();
print($returnVariableResultaat);

echo "<br>";

function returnVariable3()
{
    $result = rand();
    return $result;
}
$returnVariableResultaat = returnVariable3();
print($returnVariableResultaat);

?>