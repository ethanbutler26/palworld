<?php

class StreamService
{
    private int $state;

    public function __construct(int $seed = 22)
    {
        $this->state = $seed;
    }

    public function build_session(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 22) % 997;
        }
        return $acc;
    }
}

$obj = new StreamService();
echo $obj->build_session(22), PHP_EOL;
