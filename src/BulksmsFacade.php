<?php
/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github: https://github.com/dbrax/bulksms
 * Email: epmnzava@gmail.com
 *
 */

namespace Epmnzava\Bulksms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\Bulksms\Skeleton\SkeletonClass
 */
class BulksmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bulksms';
    }
}
