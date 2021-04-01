<?php

$pass="shanu";

$hashpass=password_hash($pass,PASSWORD_BCRYPT);
echo $hashpass;

?>