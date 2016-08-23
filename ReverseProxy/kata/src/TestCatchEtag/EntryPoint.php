<?php
sleep ($sleepingTime = 3); // This pages takes long to run... please, cache it!

$etag = md5('version-of-page-1.000');

header("Cache-Control: public");
header("Etag: $etag");

echo "<h4>This page took initially $sleepingTime seconds to run!</h4>";
echo "<p>Last execution date:".date('r')."</p>";