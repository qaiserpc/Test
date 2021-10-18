<?php

use Phalcon\Cli\Task;
/**
 * Created by PhpStorm.
 * User: qaisernaeem
 * Date: 2021-10-18
 * Time: 12:33
 */

class testTask extends Task
{
    public function mainAction()
    {
        echo 'This is the default task and the default action' . PHP_EOL;
    }
}