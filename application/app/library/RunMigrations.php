<?php
/**
 * Created by PhpStorm.
 * User: qaisernaeem
 * Date: 2021-10-18
 * Time: 12:42
 */

class ProductMigration_100
{

    public function checkIfMigrationRequire($tableName)
    {
        $output = shell_exec('.././../vendor/bin/phalcon migration run');
        echo "<pre>$output</pre>";die();
    }

}