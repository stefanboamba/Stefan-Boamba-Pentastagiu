<?php
//Write a simple class that displays a message like “Hello, my name is Alex”, where “Alex” is an argument value of the method from the class.
class MyClass {
    public static function sayHello ($name)
    {
        echo "Hello, my name is " . $name . "\n";
    }
}

MyClass::sayHello('Alex');