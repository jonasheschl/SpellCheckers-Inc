FROM debian:12.5

RUN apt-get -y update && \
    apt-get -y upgrade && \
    apt-get -y install file && \
    apt-get -y strace

ENTRYPOINT ["/bin/bash"]
