<p id="msg"></p>
<?php
	require "/var/www/phantastyc/nfd/resources/php/uac.php";
	if(!$logged_in){
?>
    <form id="login-form" method="post" action="/nfd/resources/php/ajax_acct.php?login">
    <label for="user" class="form-element">Username or Email</label>
    <input type="text" name="user" id="iuser" class="form-element">
    
    <label for="pass" class="form-element">Password</label>
    <input type="password" name="pass" id="ipass" class="form-element">
    
    <label for="remember" class="form-element">Remember Me</label>
    <input type="checkbox" name="remember" value="yes" />
    
    </form>
<?php
	}
?>
