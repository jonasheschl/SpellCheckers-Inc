FROM debian:12.5

RUN apt-get -y update && \
    apt-get -y upgrade && \
    apt-get -y install file

ENTRYPOINT ["/bin/bash"]
