<?php
// Implement your own reverse proxy here.

$serverRequest = $_SERVER['REQUEST_URI'];
echo file_get_contents($serverRequest);