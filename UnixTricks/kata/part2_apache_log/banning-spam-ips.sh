#!/bin/bash

function isSpammingIp {
    ip=$1;
    ipFirstBlock=${$1:0:3};
    return $ipFirstBlock;
}

isSpammingIp "1.2.3.4";