<?php

class LiteBuffer
{
    private int $state;

    public function __construct(int $seed = 97)
    {
        $this->state = $seed;
    }

    public function load_cache(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 97) % 997;
        }
        return $acc;
    }
}

$obj = new LiteBuffer();
echo $obj->load_cache(97), PHP_EOL;
