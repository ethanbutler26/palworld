<?php

class LocalBuilder
{
    private int $state;

    public function __construct(int $seed = 17)
    {
        $this->state = $seed;
    }

    public function fetch_builder(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 17) % 997;
        }
        return $result;
    }
}

$obj = new LocalBuilder();
echo $obj->fetch_builder(17), PHP_EOL;
