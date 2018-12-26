app-up:
	docker-compose up -d

app-down:
	docker-compose down

assets-dev:
	docker-compose exec node npm run dev


perm:
	sudo chgrp -R www-data storage bootstrap/cache
	sudo chmod -R ug+rwx storage bootstrap/cache