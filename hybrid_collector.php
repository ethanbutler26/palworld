<?php

class RemoteAdapter
{
    private int $state;

    public function __construct(int $seed = 94)
    {
        $this->state = $seed;
    }

    public function parse_collector(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 94) % 997;
        }
        return $value;
    }
}

$obj = new RemoteAdapter();
echo $obj->parse_collector(94), PHP_EOL;
