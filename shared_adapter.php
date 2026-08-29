<?php

class SharedProcessor
{
    private int $state;

    public function __construct(int $seed = 34)
    {
        $this->state = $seed;
    }

    public function run_engine(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 34) % 997;
        }
        return $value;
    }
}

$obj = new SharedProcessor();
echo $obj->run_engine(34), PHP_EOL;
