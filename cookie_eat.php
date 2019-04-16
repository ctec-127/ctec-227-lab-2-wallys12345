<?php

//$cookie_name = "user";
//$cookie_value = "John Doe";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

//setcookie("cookie[institution]","Clark", time() + 7200);

//setcookie("cookie[city]","Vancouver", time() + 7200);

//setcookie("cookie[state]","WA", time() + 7200); 

//echo "Value is: " . $_COOKIE[$cookie_username];
$name = "Ralph";
$city = "Podtown";
$state = "Alaska";
$zip = "94581";



// cookie array
setcookie ("Plus2netCookie[name]", $name,  time() + 7200);
setcookie ("Plus2netCookie[city]", $city,  time() + 7200);
setcookie ("Plus2netCookie[state]", $state,  time() + 7200);
setcookie ("Plus2netCookie[zip]", $zip,  time() + 7200);


//in the for eack below, IMPORTANT to note
//that $key=>$val are special terms for an associative array.
if (isset($_COOKIE["Plus2netCookie"])){
    foreach ($_COOKIE["Plus2netCookie"] as $key=>$val)
  {     echo $key.' is '.$val."<br>\n";   } 
 } 

echo "<br><br>";



echo "I am cookie eat.";




?>