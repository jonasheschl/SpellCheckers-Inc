FROM debian:12.5

RUN apt-get -y update && \
    apt-get -y upgrade && \
    apt-get -y install file && \
    apt-get -y install strace && \
    apt-get -y install vim && \
    apt-get -y install bsdmainutils

ENTRYPOINT ["/bin/bash"]
