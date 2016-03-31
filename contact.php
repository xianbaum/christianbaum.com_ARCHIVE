<?php
$title = 'Contact';
require 'template.php';
pheader();
pmain();
?>
<?php

function contact( $merror = '') {
echo '<form action = "contact.php" method = "post">
<table id="contact">
<tr><td class="right"><label for="name">Name or alias</label>
<td class="left" ><input type = "text" name="name" size = "40" class="text"/></td></tr>
<tr><td class="right">Email or phone<label for="email" class="text" size="40"></label></td>
<td class="left"><input type = "text" class="text" size="40" name = "email" /></td></tr>
<tr><td class="right"><label for="subject">Subject</label></td>
<td class="left"><input type = "text" size="40" class="text" name = "subject" /></td></tr>
<tr><td class="right"><label for="message">Message</label>'.$merror.'</td>
<td class="left"><textarea name="message" cols = "40" rows = "10"></textarea></td></tr>
<tr><td class="right" ></td>
<td class="left"><input type = "submit" value="Send"/></td></tr>
</table>
</form>
<p>Alternatively, you can email me at <a href="mailto:mail@christianbaum.com">mail@christianbaum.com</a>';
}

if(!isset($_POST['message']) and 
 !isset($_POST['subject']))
 contact();
else if(!empty($_POST['message']) or
     !empty($_POST['subject'])) {
$name = !empty($_POST['name']) ? addslashes($_POST['name']) : '';
$subject = !empty($_POST['subject']) ? addslashes($_POST['subject']) : '';
$email = !empty($_POST['email']) ? addslashes($_POST['email']) : '';
$message = !empty($_POST['message']) ? addslashes($_POST['message']) : '';
$cmd = 'echo '. escapeshellcmd('"To: mail@christianbaum.com\nSubject:'.$subject.'\nFrom:mail@christianbaum.com\n\nName - '.$name.'\nEmail - '.$email.'\n\n'.$message.'"') . ' | /usr/lib/sendmail mail@christianbaum.com';
exec($cmd);
     echo "<h2>Message sent</h2>";
     if(empty($_POST['email']))
          echo "<p>Note: You did not enter any contact information. I will not be able to reply to this message.</p>";
     else
	echo "<p>I will make an effort to contact you by ".$_POST['email'].'.';
}
else { 
if(empty($_POST['messsage']) and empty($_POST['subject']))
    contact('<p class="e">Enter a message.</p>');
}
pfooter(); ?>
