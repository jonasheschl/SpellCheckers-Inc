#!/bin/bash

docker run -it --mount type=bind,source="$(pwd)/mount",target=/mount mime-file