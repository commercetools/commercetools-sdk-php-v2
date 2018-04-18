<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Base;

interface Map extends Nullable
{
    public function get($key);

    /**
     * @param mixed $key
     * @param mixed $value
     * @return Collection
     */
    public function set($key, $value);
}
