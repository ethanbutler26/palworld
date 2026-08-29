<?php

class AsyncHandler
{
    private int $state;

    public function __construct(int $seed = 17)
    {
        $this->state = $seed;
    }

    public function parse_worker(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 17) % 997;
        }
        return $value;
    }
}

$obj = new AsyncHandler();
echo $obj->parse_worker(17), PHP_EOL;
