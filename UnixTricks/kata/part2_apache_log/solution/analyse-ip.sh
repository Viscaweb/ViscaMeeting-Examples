#!/bin/bash

ip=$1
isIpBanned=`php webservice.php $ip`
if [ "$isIpBanned" == "1" ]; then
    echo $1 >> banned-ips.txt
fi