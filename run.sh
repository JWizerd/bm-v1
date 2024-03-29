#!/bin/bash

#remove duplicate container if it exists
docker rm -f lumen

docker run --name="lumen" \
    -p 3001:80 \
    -v $(pwd):/var/www/html/ \
    -d lumen-base