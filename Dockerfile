FROM debian:7.9

MAINTAINER takara

WORKDIR /root/

ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update
RUN apt-get -y install wget net-tools
RUN apt-get -y install aptitude
#RUN apt-get -y install php5
COPY asset/frbit.list /etc/apt/sources.list.d/
RUN wget -O - http://debrepo.frbit.com/frbit.gpg | apt-key add -
RUN aptitude update
RUN aptitude -y install php5 apache2
RUN aptitude -y install php5-igbinary php5-mongo php5-oauth php5-phalcon php5-runkit php5-stats php5-stomp php5-yaf php5-yaml

COPY asset/init.sh /root/
COPY asset/apache2.conf /etc/apache2/
ENV DEBIAN_FRONTEND dialog

ENTRYPOINT /bin/bash /root/init.sh
