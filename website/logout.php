<?php

session_start();
$_SESSION = array();
setcookie("password", "", time() -1);
unset($COOKIE["password"]);
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"],
        $params["domain"], $params["secure"], $params["httponly"]
    );
}


session_destroy();
if (!empty ($_COOKIE["password"])) 
{ 

  header ("Location: index.html"); 
}

else
{
	echo "Cookies always destroyed.";
	echo "<br><br>";
	echo "<a href=\"index.html\"><-- Back to Pool</a>";
	echo "<br><br>";
	echo "<a href=\"admin.html\">Back to Admin Panel --></a>";
	}
?>
