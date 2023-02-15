composer install
cp .env.example .env
php artisan migrate:fresh --seed
php artisan key:generate
composer dump:autoload
php artisan view:clear
php artisan cache:clear
php artisan config:clear