# How to do this exercise ?

**Firstly:**

* Execute: `php create-fake-processes.php`
* This file will create a fake Apache logs.

**Secondly:**

* Note that calling `php webservice.php $IP` displays `1` if the IP is banned, `0` if not.
* → The goal is to `tail` in **real time** this log file, extract the IP and insert it in a file called **banned-ips.txt** if the IPs must be banned (using the webservice).