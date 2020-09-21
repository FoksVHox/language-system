<?php

namespace FoksVHox\LanguageSystem;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FoksVHox\LanguageSystem\Skeleton\SkeletonClass
 */
class LanguageSystemFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'language-system';
    }
}
