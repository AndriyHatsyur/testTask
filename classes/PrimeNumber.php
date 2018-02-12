<?php

/**
 * Class PrimeNumber
 */
class PrimeNumber {

    /**
     * @var array
     */
    private $range = [];

    /**
     * @var array
     */
    private $result = [];

    /**
     * PrimeNumber constructor.
     * @param int $number
     */
    public function __construct($number)
    {
        $this->setRange($number);
        $this->init();

    }

    /**
     * @param int $number
     */
    private function setRange($number)
    {
        for($i = 4; $i <= $number; $i += 2){
            $this->range[] = $i;
        }

    }

    /**
     * @param int $number
     * @return bool
     */
    public static function isPrime($number)
    {
        if($number == 2) {
            return true;
        }

        if($number < 2 || $number % 2 == 0) {
            return false;
        }

        for($i=3; $i <= sqrt($number); $i += 2) {
            if($number % $i == 0) {
                return false;
            }
        }
        return true;

    }

    /**
     * @param int $number
     */
    private function calculate($number)
    {
        $num = $number / 2;
        for($i = 0; $i < $num; $i++) {
            $n1 = $num - $i;
            $n2 = $num + $i;
            if(self::isPrime($n1) && self::isPrime($n2)) {
                if($n1 + $n2 == $number) {
                    $this->result["$number"][0] = $n1;
                    $this->result["$number"][1] = $n2;
                    break;
                }
            }
        }
 
    }

    private function init()
    {
        foreach($this->range as $value) {
            $this->calculate($value);
        }

    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;

    }

}