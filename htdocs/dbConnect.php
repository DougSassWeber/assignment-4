:I
<?php

// database functions ********************************************************

function fConnectToDatabase() {
   $db = new PDO('mysql:host=localhost;dbname=testDB_DVD', 'root', 'Midn1ght');
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   return $db;
}

