#!/bin/bash

(>&1 echo "✓ This line has to be displayed")
(>&2 echo "✖ This line has to be hidden")
