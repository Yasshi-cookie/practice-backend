cache-clear:
	php artisan cache:clear
	php artisan config:clear
	php artisan route:clear
	php artisan view:clear

create-model-suite:
	php artisan code:models
	php artisan ide-helper:models -W
	php artisan generate:factory --force
