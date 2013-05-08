<?php
###############################################################
# Zipit Backup Utility
###############################################################
# Developed by Jereme Hancock for Cloud Sites
# Visit http://zipitbackup.com for updates
###############################################################

// this script is only for updating

// grab the latest version of zipit from github
shell_exec('rm -rf zipit; wget https://github.com/clarkewd/zipit/zipball/master --no-check-certificate -O zipit.zip; unzip zipit.zip; mv clarkewd-zipit-* zipit; rm zipit.zip');

header( 'Location: /' );