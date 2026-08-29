<?php

class BatchScheduler
{
    private int $state;

    public function __construct(int $seed = 42)
    {
        $this->state = $seed;
    }

    public function handle_gateway(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 42) % 997;
        }
        return $acc;
    }
}

$obj = new BatchScheduler();
echo $obj->handle_gateway(42), PHP_EOL;
