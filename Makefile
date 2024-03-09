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
