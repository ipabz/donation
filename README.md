# Donation

# Installation

After cloning, execute the following:

    composer install
    php artisan key:generate
    composer dumpautoload -o
    php artisan migrate --seed  

on the .env file, add the following

        STRIPE_PUBLIC_KEY=yourkeyhere
        STRIPE_SECRET_KEY=yourkeyhere

for testing purposes, you can put the test keys instead.


# Schedule Cron Job

execute this

        crontab -e
        
and add this 

        * * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1
        
don't forget to change /path/to/artisan
