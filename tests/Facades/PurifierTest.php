<?php

namespace Cebugle\Tests\Purifier\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Cebugle\Purifier\Facades\Purifier;
use Cebugle\Tests\Purifier\AbstractTestCase;

class PurifierTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'purifier';
    }
    /**
     * Get the facade class.
     *
     * @return string
     */
    protected static function getFacadeClass(): string
    {
        return Purifier::class;
    }
    /**
     * Get the facade root.
     *
     * @return string
     */
    protected static function getFacadeRoot(): string
    {
        return \Cebugle\Purifier\Purifier::class;
    }
}