FROM debian:12.5

RUN apt-get -y update && \
    apt-get -y upgrade && \
    apt-get -y install file && \
    apt-get -y strace && \
    apt-get -y vim && \
    apt-get -y bsdmainutils

ENTRYPOINT ["/bin/bash"]
