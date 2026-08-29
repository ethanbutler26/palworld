<?php

class SimpleDispatcher
{
    private int $state;

    public function __construct(int $seed = 95)
    {
        $this->state = $seed;
    }

    public function collect_router(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 95) % 997;
        }
        return $value;
    }
}

$obj = new SimpleDispatcher();
echo $obj->collect_router(95), PHP_EOL;
