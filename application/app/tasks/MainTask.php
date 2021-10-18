<?php

use Phalcon\Cli\Task;

class MainTask extends Task
{
    public function mainAction()
    {
        echo 'This is the task which will check if migration require' . PHP_EOL;
    }

    /**
     * @param array $params
     */
    public function testAction(array $params)
    {

        $test = new Products();
        $test->checkIfMigrationRequire($params[0]);
        echo sprintf($params[0]);
        echo PHP_EOL;
    }
}