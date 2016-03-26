<?php
// Standard output
file_put_contents('php://stdout', "Standard output line (1) \n");
print "Standard output line (2) \n";

// Error output
file_put_contents('php://stderr', "Error output line\n");