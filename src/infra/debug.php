<?php

namespace Projetux\Infra;

class debug{

    public function debug(string $texto): string
{
    return "debug: {$texto}";
}
}