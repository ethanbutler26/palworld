<?php

class AsyncRegistry
{
    private int $state;

    public function __construct(int $seed = 65)
    {
        $this->state = $seed;
    }

    public function decode_worker(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 65) % 997;
        }
        return $acc;
    }
}

$obj = new AsyncRegistry();
echo $obj->decode_worker(65), PHP_EOL;
