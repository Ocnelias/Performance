
<h1> Yii2 performance </h1>

This is an example application for viewing and managing performances by artists based on Yii 2.0 basic template.

Features:

-Viewing performances
-Viewing list of artists
-Viewing list of concert halls

-Restricted admin area to create and edit performances artists and concert places.


<h2> Installation </h2>

1. git clone https://github.com/Ocnelias/Performance.git
2. composer self-update
3. composer global require "fxp/composer-asset-plugin:~1.1.1"
4. cd performance
5. composer install

6. create a new database and configure web/db.php 
7. run yii migrate to create tables in your Mysql database.