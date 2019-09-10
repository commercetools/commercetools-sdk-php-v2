<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\MapperMap;

/**
 * @extends Builder<LocalizedString>
 */
final class LocalizedStringBuilder extends MapperMap implements Builder
{
    /**
     * @return LocalizedString
     */
    public function build()
    {
        return new LocalizedStringModel($this->toArray());
    }

    /**
     * @psalm-return callable(string):?mixed
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?mixed
             */
            function (string $key) {
                return $this->get($key);
            };
    }
}
