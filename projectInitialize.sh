composer install
cp .env.example .env
npm install
php artisan migrate:fresh --seed
php artisan key:generate
php artisan view:clear
php artisan cache:clear
php artisan config:clear