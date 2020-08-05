<?php
// setcookie("customerId", "69", time() + 60 * 60 * 24);

//set cookie in the past to remove the cookie
echo "Update cookie.....<br>";
setcookie("customerId", "", -1, "/");
echo $_COOKIE["customerId"];

?>

