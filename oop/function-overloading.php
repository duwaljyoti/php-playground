<?php

echo "Function overloading.<pre>";

session_start();

var_dump($_SESSION);


var_dump('==', $_SESSION);

class TestClass {

    public function __call($arg1, $arg2) {
        $numberOfArguments = func_num_args();
        $args = func_get_args();
        
        if ($numberOfArguments === 1) {
            $this->oneArgMethod(...$args[1]);
        }

        if ($numberOfArguments === 2) {
            $this->twoArgsMethod(...$args[1]);
        }
    }

    public function oneArgMethod($arg) {
        var_dump('one argument.');
    }

    public function twoArgsMethod($arg1, $arg2) {
        var_dump('two arguments.', $arg1, $arg2);
    }
}

$testObject = new TestClass();

$testObject->testMethod('first', 'second');