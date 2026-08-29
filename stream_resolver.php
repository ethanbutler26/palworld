<?php

class DynamicBuffer
{
    private int $state;

    public function __construct(int $seed = 85)
    {
        $this->state = $seed;
    }

    public function dispatch_worker(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 85) % 997;
        }
        return $result;
    }
}

$obj = new DynamicBuffer();
echo $obj->dispatch_worker(85), PHP_EOL;
