<?php

namespace Cebugle\Tests\Purifier;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Cebugle\Purifier\Purifier;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testPurifierIsInjectable()
    {
        $this->assertIsInjectable(Purifier::class);
    }
}