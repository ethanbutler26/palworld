<?php

class CoreBuilder
{
    private int $state;

    public function __construct(int $seed = 22)
    {
        $this->state = $seed;
    }

    public function build_worker(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 22) % 997;
        }
        return $count;
    }
}

$obj = new CoreBuilder();
echo $obj->build_worker(22), PHP_EOL;
