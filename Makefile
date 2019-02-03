PROJECT_NAME ?= app
DOCKER_COMPOSE := docker-compose -p $(PROJECT_NAME)

build:
	$(DOCKER_COMPOSE) build

run:
	$(DOCKER_COMPOSE) up -d

stop:
	$(DOCKER_COMPOSE) stop

list:
	$(DOCKER_COMPOSE) ps

restart:
	$(DOCKER_COMPOSE) restart

kill:
	$(DOCKER_COMPOSE) kill

logs:
	$(DOCKER_COMPOSE) logs

restart-web:
	$(DOCKER_COMPOSE) stop web
	$(DOCKER_COMPOSE) start web
