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
