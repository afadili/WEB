<?php
require_once 'MyPDO.class.php';

// host=votre serveur (localhost si travail en local)
MyPDO::setConfiguration('mysql:localhost=mysql;dbname=imac-movies;charset=utf8', 'root', '');
