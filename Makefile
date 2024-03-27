seed:
	php artisan migrate:fresh
	php artisan db:seed

serve:
	php artisan serve

start-npm:
	npm run dev

tinker:
	php artisan tinker

fresh:
	php artisan migrate:fresh

cache:
	php artisan route:cache
	php artisan view:cache
	php artisan config:cache
	php artisan event:cache

lint:
	./vendor/bin/phpcs

run-docker-mailhog:
	docker run -p 8025:8025 -p 1025:1025 mailhog/mailhog
