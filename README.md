    cd laravel_project    

    php composer.phar install --ignore-platform-req=php

    php artisan migrate --path=database/migrations/2023_03_03_134932_alter_table_categories_category_name_column.php
    
    php artisan db:seed --class=CategorySeeder