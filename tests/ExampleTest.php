<?php

namespace FoksVHox\LanguageSystem\Tests;

use FoksVHox\LanguageSystem\LanguageSystemServiceProvider;
use Orchestra\Testbench\TestCase;

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
