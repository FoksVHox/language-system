<?php

namespace FoksVHox\LanguageSystem\Tests;

use Orchestra\Testbench\TestCase;
use FoksVHox\LanguageSystem\LanguageSystemServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LanguageSystemServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
