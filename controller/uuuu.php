<?php
//echo system("/usr/bin/sudo /mnt/svn_update.sh");
echo shell_exec("/usr/bin/sudo");
die('更新完成了');