<?php
$title = "Stray Kitty";
require 'template.php';
pheader();
pcircle('images/kitty.png');
pmain();
?>
<script src="scripts/StrayKitty/straykitties.js"></script>
<h2>What is it?</h2>
<hr />
<p>It's a cat toy written in JavaScript. They act on their own, but you can interact with it by clicking on the cat with your mouse.</p>
<h2>Where can I get it?</h2>
<hr />
<p>The code was published on GitHub.com here:</p>
<p><a href="https://github.com/xianbaum/StrayKitty/">https://github.com/xianbaum/StrayKitty/</a></p>
<h2>I want a demo!</h2>
<hr />
<p>If you have JavaScript enabled in an HTML5-enabled browser, chances are, you already see two kitties!</p>
<p>But you can add more, and you can remove them with the buttons below.</p>
<p>Make it rain.</p>
<input type="button" onclick="StrayKitty.addKitty();" value="Add a kitty" />
<input type="button" onclick="StrayKitty.remKitty();" value="Remove a kitty" />
<?php pfooter(); ?>
