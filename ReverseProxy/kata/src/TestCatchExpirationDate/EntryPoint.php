<?php
sleep ($sleepingTime = 3); // This pages takes long to run... please, cache it!

header("Cache-Control: public");
header("Expires: Tue, 07 Mar 2017 05:00:00 GMT");

echo "<h4>This page took initially $sleepingTime seconds to run!</h4>";
echo "<p>Last execution date:".date('r')."</p>";