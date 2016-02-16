# Donation

# Installation

After cloning, execute the following:

    composer install
    php artisan key:generate
    composer dumpautoload -o
    php artisan migrate --seed  


# Schedule Cron Job

execute this

        crontab -e
        
and add this 

        * * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1
        
dont forge to change /path/to/artisan
