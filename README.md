
<h1> Yii2 performance </h1>

This is an example application for viewing and managing performances by artists based on Yii 2.0 basic template.

Features:

-Viewing performances <br/>
-Viewing list of artists <br/>
-Viewing list of concert halls <br/>

-Restricted admin area to create and edit performances, artists, and concert places.

Use  login <small> perfromance </small> and password <small> perfromance </small> to enter administrative panel.

<h2> Installation </h2>

1. git clone https://github.com/Ocnelias/Performance.git
2. composer self-update
3. composer global require "fxp/composer-asset-plugin:^1.2.0"
4. cd performance
5. composer install

6. create a new database and configure web/db.php 
7. run yii migrate to create tables in your Mysql database.
