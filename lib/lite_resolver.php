<?php

class BatchScheduler
{
    private int $state;

    public function __construct(int $seed = 94)
    {
        $this->state = $seed;
    }

    public function render_context(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 94) % 997;
        }
        return $total;
    }
}

$obj = new BatchScheduler();
echo $obj->render_context(94), PHP_EOL;
