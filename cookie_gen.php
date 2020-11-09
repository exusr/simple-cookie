<?php
//setcookie(name, value, expire, path, domain, secure, httponly);
setcookie('user','user_value',time() + (86400 * 30),"/","localhost",0,1);
print_r($_COOKIE);
?>