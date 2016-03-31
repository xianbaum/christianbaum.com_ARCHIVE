<?php
$title = "ELIZA";
require 'template.php';
pheader();
pcircle('images/eliza320.png');
pmain();
?>
<h2>What is it?</h2>
<hr />
<p>ELIZA is a chatterbot designed in between 1964 and 1966 at MIT by Joseph Weizenbaum. It uses pattern matching to look for specific phrases and uses primitive language processing to simulate a psychotherapist. For example, a user may enter "My mom hates me.", and it will respond with "Who else in your family hates you?", or "I feel hated" could result in a response of "Do you feel hated often?"</p>
<p>ELIZA is most commonly written in LISP due to the nature of the program. However, this implementation uses Java, but it is equally capable, if not more capable than many LISP implementations.
<h2>Where can I get it?</h2>
<hr />
<p>ELIZA was published on the Google Play store <a href="https://play.google.com/store/apps/details?id=com.christianbaum.eliza">here</a>. The code is also on GitHub at <a href="https://github.com/xianbaum/eliza-android">https://github.com/xianbaum/eliza-android</a>. It requires only Eclipse and the Android Development Kit to compile.
<?php pfooter(); ?>
