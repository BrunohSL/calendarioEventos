.PHONY: *

upd:
	docker compose up -d

up:
	docker compose up

build:
	docker compose build

buildup:
	docker compose up --build

buildupd:
	docker compose up --build -d

down:
	docker compose down

prune:
	docker system prune -a

stoprune:
	docker container stop $(shell docker container ls -aq)
	docker system prune -a
