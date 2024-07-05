<?php

/**
 * WORKING WITH CRONJOBS
 * 
 * Syntax for adding crons
 * @param crontab -e
 * @return * * * * * php /home/wilfredjr/code/play/happy-clients/artisan schedule:run >> /dev/null 2>&1
 * 
 * Checking Logs
 * @param sudo grep CRON /var/log/syslog
 * 
 * Clearing Logs
 * @param sudo truncate -s 0 /var/log/syslog 
 * 
 */
