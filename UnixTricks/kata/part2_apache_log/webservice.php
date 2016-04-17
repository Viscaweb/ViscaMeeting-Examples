<?php
$isBannedIp = isset($argv[1]) && preg_match('#^105\.#', $argv[1]);

echo $isBannedIp ? '1' : '0';