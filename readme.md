<h1>Merchant-Shop</h1>
<h2>A simple website where you can find the perfect product and price from your favorite merchant</h2>

#Quick start

<h3>Install Dependencies</h3>
composer install

<h3>Run Migrations</h3>
php artisan migrate

<h3>Import Articles</h3>
php artisan db:seed

<h3> Add virtual host if using Apache</h3>

<h3> If you get an error about an encryption key</h3>
php artisan key:generate

<h3>How to add a admin to your website</h3>
php artisan tinker
$admin=new App\Admin
$admin->name="Name Admin"
$admin->email= "admin@mail.com"
$admin->password= Hash::make('adminpassword')
$admin->job_title= "Admin Job"
$admin->save()

To enter the admin login page you need to acces
http://shop.test/admin/login
