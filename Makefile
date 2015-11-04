NAME=phalcon
VERSION=0.0.1
DOCKER_RUN_HOME=`pwd`
DOCKER_RUN_OPTIONS=\
	-v $(DOCKER_RUN_HOME)/src:/var/www/ \
	--privileged


include docker.mk
