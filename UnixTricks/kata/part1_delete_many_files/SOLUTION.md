# Solutions

There are many ways to kill all those scripts:

### Solutions
* find /tmp/delete -type f -exec rm -f {} \;
* find /tmp/delete -type f | xargs rm;

### Explanations
* `find $FOLDER -type f` - list all files in the given folder (folder excluded)
* `rm` - delete the given file