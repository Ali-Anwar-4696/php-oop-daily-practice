<?php
class calculator{
    public static $a, $b, $c;
    public static function add(){
        self::$c = self::$a + self::$b;
        return self::$c;
    }

       public static function sub(){
        self::$c = self::$a - self::$b;
        return self::$c;
       }

        public static function mult(){
            self ::$c = self::$a * self::$b;
            return self :: $c;
        }

        public static function div(){
            self :: $c = self::$a / self :: $b;
            return self :: $c;
        }
}
       calculator :: $a = 10;
       calculator :: $b = 20;
       echo "addition is : " . calculator :: add() . PHP_EOL;
       echo "subtraction is : " . calculator :: sub() . PHP_EOL;
       echo "Multiplication is : " . calculator :: mult() . PHP_EOL;
       echo "division is : " . calculator :: div() . PHP_EOL;

    





?>