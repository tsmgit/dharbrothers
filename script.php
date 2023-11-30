<?php
//user:cinecafes
//Password:derdWKqa0782Z
//https://github.com/cinecafes/cinecafes.git

exec("git pull https://github.com/tsmgit/dharbrothers.git main");
exec("cd /home6/thinksurfmedia/dharbrothers.thinksurfmedia.in/php/");
exec("composer install");
exec("source /home6/thinksurfmedia/nodevenv/dharbrothers.thinksurfmedia.in/php/10/bin/activate && cd /home6/thinksurfmedia/dharbrothers.thinksurfmedia.in/php");
exec("npm install");
?>