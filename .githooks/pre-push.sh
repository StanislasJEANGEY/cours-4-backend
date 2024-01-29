#!/bin/bash

echo "Running pre-push hook"
./run_tests.sh

# If tests do not pass, exit with non-zero status
if [ $? -ne 0 ]; then
 echo "Tests must pass before push!"
 exit 1
fi