#!/bin/bash
ip addr flush eth0
ip addr add 172.17.240.5/16 dev eth0
route add default gw 172.17.42.1
service apache2 start
/bin/bash --login

