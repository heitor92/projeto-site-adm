#!/bin/sh

docker run \
    --rm \
    -i \
    --network=host \
    -v "$HOME":"$HOME":ro \
    -u $(id -u) \
    -w "$PWD" \
    php:7.4.8-alpine \
    php "$@"

exit $?

# pegue o caminho todo desse arquivo para colocar no Path do PHP