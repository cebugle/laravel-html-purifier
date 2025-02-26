<?php

namespace Cebugle\Purifier\Casts;

trait WithConfig
{
    /**
     * @var mixed
     */
    protected $config;

    public function __construct($config = null)
    {
        $this->config = $config;
    }
}
