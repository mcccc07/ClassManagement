# 1. Clone the repository
git clone https://github.com/mcccc07/ClassManagement.git
cd ClassManagement

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install && npm run dev

# 4. Set up environment
cp .env.example .env
php artisan key:generate

# 5. Configure your database in .env
DB_DATABASE=classmanagement
DB_USERNAME=root
DB_PASSWORD=your_password

# 6. Run migrations
php artisan migrate

# 7. Start the server
php artisan serve
