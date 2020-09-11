#!/bin/bash
docker run --rm -it \
  --volume /etc/passwd:/etc/passwd:ro \
  --volume /etc/group:/etc/group:ro \
  --volume $PWD:$PWD \
  --user $(id -u):$(id -g) \
  --workdir $PWD \
  composer $@
