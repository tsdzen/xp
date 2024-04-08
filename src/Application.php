<?php

namespace App;

class Application
{
    public static function run()
    {
        echo "Application is running\n";
    }

    public static function test($module = '')
    {
//        echo "Application is tesrrting\n";
        $testsRunner = new \UTests\Runner();
        $testsRunner->runTests($module);
    }
}