<?php
$salutation= "Hey There";

$firstName = "Baha";
$lastName = "Biriktir";
$middleName = "Dawen";
$fullName = $firstName . " " . $middleName . " " . $lastName;
$age = 18;
$birthday = "27.07.2003";
$myPassword = "1q2w3e!";
$FirstLetter = substr($firstName, 0,1);
$SecondLetter = substr($lastName, 0,1);
$FullLetter = $FirstLetter . "." . $SecondLetter;
$MyEmail = "Bahadir@Biriktir.com";
$domain = strstr($MyEmail, '@');



echo $fullName . "<br>";
echo "mei name ist $firstName $middleName  $lastName. Ich bin $age jahre alt ($birthday).<br>";
echo $FullLetter . "<br> "." <br>";

echo "String Länge:" . "<br>";
echo strlen($firstName) . "<br>" . "<br>";

echo "My Email:" . "<br>";
echo $MyEmail . "<br>";
echo $domain  . "<br>" . "<br>";

echo "Used_Password:" . "<br>";
echo $myPassword . "<br>" . "<br>";

echo "NotUsed_Password:" . "<br>";
echo str_replace("q", "p", $myPassword) . "<br>" . "<br>";

echo "Bullyname:" . "<br>";
$bullyName = substr("Biriktir", -5,-1);
echo $bullyName . "<br>" . "<br>";

echo "seconBullyname: " . "<br>";
$secondBullyName = substr("BiriktirBaha", -10,-2);
echo $secondBullyName . "<br>";


