<?php

$cookie_username = "username";
$cookie_value = "BettyW";

$cookie_firstname = "firstname";
$cookie_value_first = "Betty";

$cookie_lastname = "lastname";
$cookie_value_last = "White";

setcookie($cookie_username, $cookie_value, time() + 7200 );

setcookie($cookie_firstname, $cookie_value_first, time() + 7200 );

setcookie($cookie_lastname, $cookie_value_last, time() + 7200 );

//  $_COOKIE is an associative array: key, value. 
//  the parameter is the key and it produces the value.


echo "username is: " . $_COOKIE[$cookie_username];
 
echo "<br><br>";

echo "firstname is: " . $_COOKIE[$cookie_firstname];

echo "<br><br>";

echo "lastname is: " . $_COOKIE[$cookie_lastname];

echo "<br><br>";

echo "I have baked everything.";



//setcookie("lastname", "Betty", time() + 7200 );

//setcookie("cookie[institution]","Clark", time() + 7200);
//setcookie("cookie[city]","Vancouver", time() + 7200);
//setcookie("cookie[state]","WA", time() + 7200); 

//another example of cookie array
//setcookie ("Plus2netCookie[name]", $name);
//setcookie ("Plus2netCookie[city]", $city);
//setcookie ("Plus2netCookie[state]", $state);
//setcookie ("Plus2netCookie[zip]", $zip);



?>