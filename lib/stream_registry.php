<?php

class BatchAdapter
{
    private int $state;

    public function __construct(int $seed = 40)
    {
        $this->state = $seed;
    }

    public function fetch_builder(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 40) % 997;
        }
        return $value;
    }
}

$obj = new BatchAdapter();
echo $obj->fetch_builder(40), PHP_EOL;
