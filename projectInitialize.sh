composer update
cp .env.example .env
php artisan migrate:fresh --seed
php artisan key:generate
php artisan view:clear
php artisan cache:clear
php artisan config:clear