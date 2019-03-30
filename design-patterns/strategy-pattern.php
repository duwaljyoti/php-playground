<?php

// Strategy Pattern
// this design patterns focuses on interchangeable algorithms.
// minimizes coupling
// supports the principle of Open/closed principle

echo "hello for strategy patter.<pre>";

class StrategyContext{
    public $strategyType = null;


    public function __construct($bookType, $bookName)
    {
        switch ($bookType) {
            case 'caps':
                $this->strategyType = new StrategyCaps($bookName);
            break;
            case 'lower':
                $this->strategyType = new StrategyLower($bookName);
            break;
            default:
            break;
        }

    }


    public function showBookName() {
        return $this->strategyType->showName();
    }
}

interface ShouldHaveName {
    public function showName();
}

class StrategyCaps implements ShouldHaveName {
    private $bookName = null;

    public function __construct($bookName) {
        $this->bookName = $bookName;
    }

    public function showName() {
        return 'in caps =>' . $this->bookName;
    }
}

class StrategyLower implements ShouldHaveName {

    public function __construct($bookName) {
        $this->bookName = $bookName;
    }

    public function showName() {
        return 'in lower =>' . $this->bookName;
    }
}

$book = new StrategyContext('caps', 'first book in caps');
$book2 = new StrategyContext('lower', 'second book in lower');


var_dump($book->showBookName());
var_dump($book2->showBookName());


