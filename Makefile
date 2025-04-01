.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t docker-php-boilerplate .

build-container:
	docker run -dt --name PruebaKataClaseVyV -v .:/540/Boilerplate docker-php-boilerplate
	docker exec PruebaKataClaseVyV composer install

start:
	docker start PruebaKataClaseVyV

test: start
	docker exec ohce ./vendor/bin/phpunit tests/ShoppingListKataTest.php

shell: start
	docker exec -it PruebaKataClaseVyV /bin/bash

stop:
	docker stop PruebaKataClaseVyV

clean: stop
	docker rm PruebaKataClaseVyV
	rm -rf vendor
