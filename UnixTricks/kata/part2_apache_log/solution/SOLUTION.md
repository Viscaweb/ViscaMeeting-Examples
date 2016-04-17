# Solutions

### Solution
* Run the PHP script creating logs: `php create-fake-processes.php`
* Run this command: `tail -f /tmp/fake-apache.log | awk '{system("bash solution/analyse-ip.sh " $1)}'`

### Explanations
* `tail -f` - is reading in real time the log file
* `awk` - will extract each part of the line
* `$1` - refers to the first part of the line, which is the IP
* `system....` - will use the reference $1 (the IP) and pass it to the script analyse-ip.sh