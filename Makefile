-include .env
container=${APP_SLUG}_php-fpm

up:
	docker-compose up -d

start: up permission

stop:
	docker-compose stop

down: stop

restart: stop up

rebuild: clean
	docker-compose build --force-rm --no-cache
	docker-compose up -d

build: clean
	docker-compose build
	docker-compose up -d

clean:
	docker-compose rm -vsf
	docker-compose down -v --remove-orphans

jumpin:
	docker exec -it ${container} bash

composer-install:
	docker exec ${container} composer install --ignore-platform-reqs --prefer-dist

app-init:
	docker exec ${container} cp .env.example .env

dev: up composer-install app-init permission

permission:
	chgrp -R www-data ./application ./application
	chmod -R ug+rwx ./application ./application