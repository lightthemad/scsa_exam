Might require a php-pdo, php-mysqlnd, php-json

You should point to your database using the "logic/config/db.json" file

And, in the virtualhost file, this part is required

<Directory /var/www/PATH_TO_THIS_WEBAPP>
    AllowOverride All
</Directory>
