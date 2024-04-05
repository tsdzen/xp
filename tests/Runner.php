<?php

namespace UTests;

use PHPUnit\TextUI;

require '/Users/tatiana.shuvalova/my-projects/xp/vendor/phpunit/phpunit/src/TextUI/Application.php';

class Runner
{

    public function __construct()
    {
        (new (TextUI\Application::class)())->run([]);
    }

    public function runTests($module = '')
    {
        $testClasses = $this->getTestClasses($module);
        foreach ($testClasses as $testClass) {
            if ($module) {
                $testClass = $module . '/' . $testClass;
            }
            $this->runTest($testClass);
        }
    }

    function scanAllDir($dir) {
        $result = [];
        foreach(scandir($dir) as $filename) {
            if ($filename[0] === '.') continue;
            $filePath = $dir . '/' . $filename;
            if (is_dir($filePath)) {
                foreach ($this->scanAllDir($filePath) as $childFilename) {
                    $result[] = $filename . '/' . $childFilename;
                }
            } else {
                $result[] = $filename;
            }
        }
        return $result;
    }

    private function getTestClasses($module = '')
    {
        $testClasses = [];

        switch ($module) {
            case '':
                $files = $this->scanAllDir(__DIR__);
                break;
            default:
                $files = scandir(__DIR__ . '/' . $module);
        }

        foreach ($files as $file) {
            if (strpos($file, 'Test.php') !== false) {
                $testClasses[] = $file;
            }
        }

        return $testClasses;
    }

    private function runTest($testClass)
    {
        $testClass = str_replace(['.php', '/'], ['', '\\'], $testClass);
        $testClass = 'UTests\\' . $testClass;
        $test = new $testClass();
        $test->run();
    }
}