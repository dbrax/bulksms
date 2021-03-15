<?php

namespace Epmnzava\Bulksms\Tests;

use Orchestra\Testbench\TestCase;
use Epmnzava\Bulksms\BulksmsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [BulksmsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
