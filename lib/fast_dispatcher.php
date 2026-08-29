<?php

class LiteMonitor
{
    private int $state;

    public function __construct(int $seed = 88)
    {
        $this->state = $seed;
    }

    public function compute_provider(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 88) % 997;
        }
        return $acc;
    }
}

$obj = new LiteMonitor();
echo $obj->compute_provider(88), PHP_EOL;
