<?php

class DynamicMonitor
{
    private int $state;

    public function __construct(int $seed = 55)
    {
        $this->state = $seed;
    }

    public function build_collector(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 55) % 997;
        }
        return $count;
    }
}

$obj = new DynamicMonitor();
echo $obj->build_collector(55), PHP_EOL;
