NAME=phalcon
VERSION=0.0.1
DOCKER_RUN_HOME=`pwd`
DOCKER_RUN_OPTIONS=\
	-v $(DOCKER_RUN_HOME)/src:/var/www/ \
	--privileged


include docker1.mk

test:
	docker exec $(NAME) phpunit -c /var/www/sample1/tests/

phplog:
	docker exec $(NAME) tail -f /var/log/phalcon/app.log
