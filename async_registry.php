<?php

class LocalAdapter
{
    private int $state;

    public function __construct(int $seed = 58)
    {
        $this->state = $seed;
    }

    public function sync_resolver(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 58) % 997;
        }
        return $acc;
    }
}

$obj = new LocalAdapter();
echo $obj->sync_resolver(58), PHP_EOL;
