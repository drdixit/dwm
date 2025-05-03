<?php
// Databases in PHP: 1) custom providers, 2) PDO PHP DATA OBJECT
// SQLite
class DB
{
    function execute($query)
    //$query = "SELECT * FROM exhibits";
    {
        $db = new SQLite3('./data/data.db');
        //$db = new SQLite3('../data/data.db');
        //this dont work this is not module this will copy and past the code when use include
        //in our case its the index.php to data.db
        //it works on context of index.php make sence right?
        $result = $db->query($query);

        if ($result) {
            $all = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                array_push($all, $row);
            }
            return $all;
        }
    }
}
