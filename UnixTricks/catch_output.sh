# Display all
php output.php

# Redirect errors to a specific file
php output.php 2> /tmp/error.txt

# Redirect errors to nowhere
php output.php 2> /dev/null

# Display only errors (by redirecting classic output to nowhere)
php output.php 1> /dev/null

# Hide all displays
php output.php 1>/dev/null 2>&1