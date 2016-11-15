# README #

This is the repository for Revaluta, the complementary currency bank.

### How to install on your local machine ###

* Checkout the repository
* Run composer update
* Create a local database
* Initialize the database `mysql -uuser -ppass -Ddatabase < initial.sql`
* Copy .env.example to .env and edit database details
* chmod -R og+rwx storage
* php artisan key:generate
* php artisan vendor:publish
* Copy or symlink the 'public' folder to your web root. You can rename it to eg. 'revaluta'.
* Or point Apache or NGINX to the public folder.
* Navigate to http://localhost/revaluta

