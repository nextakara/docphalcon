FROM debian:7.9

MAINTAINER taka2063

WORKDIR /root/

ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update
RUN apt-get -y install wget net-tools
RUN apt-get -y install git make
RUN apt-get -y install php5 apache2
RUN apt-get -y install php5-dev php5-mysql gcc libpcre3-dev
RUN apt-get -y install vim curl chkconfig

# phalconインストール
RUN git clone --depth=1 https://github.com/phalcon/cphalcon.git
WORKDIR /root/cphalcon/build
RUN ./install

# phalcon設定
COPY asset/phalcon.ini /etc/php5/mods-available/
RUN ln -s /etc/php5/mods-available/phalcon.ini /etc/php5/conf.d/20-phalcon.ini


# phalcon devtools
WORKDIR /root/
RUN git clone https://github.com/phalcon/phalcon-devtools.git
WORKDIR /root/phalcon-devtools
RUN curl -s http://getcomposer.org/installer | php
RUN php composer.phar install
RUN ln -s /root/phalcon-devtools/phalcon.php /usr/bin/phalcon
RUN chmod ugo+x /usr/bin/phalcon

# ip固定
WORKDIR /root/
COPY asset/ipchange /etc/init.d/
RUN chkconfig --add ipchange

COPY asset/apache2.conf /etc/apache2/
COPY asset/default /etc/apache2/sites-available/
ENV DEBIAN_FRONTEND dialog

# ttyコメントアウト
RUN sed -i -e 's/^\([1-6]:.\+\)/#\1/g' /etc/inittab

EXPOSE 80

WORKDIR /var/www/sample1

CMD ["/sbin/init", "3"]
